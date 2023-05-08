<?php


require_once('db.php');

function get_user_shoe_preferences($id_utilisateur)
{
    $db = getDatabase();

    $stmt = $db->prepare("SELECT id_chaussure, likedislike FROM utilisateur_like WHERE id_utilisateur = :id_utilisateur");
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);

    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}


function get_similar_users($id_utilisateur)
{
    $db = getDatabase();

    // Récupérer les préférences de chaussures pour l'utilisateur donné
    $user_prefs = get_user_shoe_preferences($id_utilisateur);

    // Préparer la requête pour récupérer les préférences de chaussures pour tous les autres utilisateurs
    $stmt = $db->prepare("SELECT id_utilisateur, id_chaussure, rating FROM shoe_preferences WHERE id_utilisateur != :id_utilisateur");
    $stmt->execute(array(':id_utilisateur' => $id_utilisateur));

    // Stocker les préférences de chaussures de tous les autres utilisateurs dans un tableau associatif
    $other_users_prefs = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id_utilisateur = $row['id_utilisateur'];
        $id_chaussure = $row['id_chaussure'];
        $rating = $row['rating'];
        if (!isset($other_users_prefs[$id_utilisateur])) {
            $other_users_prefs[$id_utilisateur] = array();
        }
        $other_users_prefs[$id_utilisateur][$id_chaussure] = $rating;
    }

    // Calculer le score de similarité entre l'utilisateur donné et tous les autres utilisateurs
    $similarites = array();
    foreach ($other_users_prefs as $other_id_utilisateur => $other_user_prefs) {
        $similarite = calculate_similarite($user_prefs, $other_user_prefs);
        $similarites[] = array('id_utilisateur' => $other_id_utilisateur, 'similarite_score' => $similarite);
    }

    // Trier les utilisateurs par ordre décroissant de score de similarité
    usort($similarites, function ($a, $b) {
        return $b['similarite_score'] - $a['similarite_score'];
    });

    return $similarites;
}

function calculate_similarite($prefs1, $prefs2)
{
    // Calculer la similarité entre deux utilisateurs en utilisant la formule de Pearson
    $sum1 = 0;
    $sum2 = 0;
    $sum1Sq = 0;
    $sum2Sq = 0;
    $pSum = 0;
    $n = 0;
    foreach ($prefs1 as $id_chaussure => $rating1) {
        if (isset($prefs2[$id_chaussure])) {
            $rating2 = $prefs2[$id_chaussure];
            $sum1 += $rating1;
            $sum2 += $rating2;
            $sum1Sq += pow($rating1, 2);
            $sum2Sq += pow($rating2, 2);
            $pSum += $rating1 * $rating2;
            $n += 1;
        }
    }
    if ($n == 0) {
        return 0;
    }
    $num = $pSum - ($sum1 * $sum2 / $n);
    $den = sqrt(($sum1Sq - pow($sum1, 2) / $n) * ($sum2Sq - pow($sum2, 2) / $n));
    if ($den == 0) {
        return 0;
    }
    return $num / $den;
}



function get_user_based_recommendations($id_utilisateur, $num_recommendations)
{
    // Récupération des préférences de chaussures de l'utilisateur
    $user_shoe_preferences = get_user_shoe_preferences($id_utilisateur);

    // Récupération des scores de similarité avec les autres utilisateurs
    $similar_users = get_similar_users($id_utilisateur);

    // Initialisation d'un tableau pour stocker les chaussures recommandées
    $recommended_shoes = array();

    // Parcours des utilisateurs similaires
    foreach ($similar_users as $similar_user) {
        $similar_id_utilisateur = $similar_user[0];
        $similarite_score = $similar_user[1];

        // Récupération des préférences de chaussures de l'utilisateur similaire
        $similar_user_shoe_preferences = get_user_shoe_preferences($similar_id_utilisateur);

        // Parcours des préférences de chaussures de l'utilisateur similaire
        foreach ($similar_user_shoe_preferences as $similar_user_shoe_preference) {
            $id_chaussure = $similar_user_shoe_preference[0];
            $shoe_rating = $similar_user_shoe_preference[1];

            // Vérification que l'utilisateur n'a pas déjà noté cette chaussure
            if (!array_key_exists($id_chaussure, $user_shoe_preferences)) {
                // Calcul du score de recommandation
                $recommendation_score = $similarite_score * $shoe_rating;

                // Ajout de la chaussure et du score de recommandation au tableau des chaussures recommandées
                $recommended_shoes[$id_chaussure] = $recommendation_score;
            }
        }
    }

    // Tri du tableau des chaussures recommandées en ordre décroissant de score de recommandation
    arsort($recommended_shoes);

    // Récupération des $num_recommendations premières chaussures recommandées
    $top_recommendations = array_slice($recommended_shoes, 0, $num_recommendations, true);

    // Récupération des IDs des chaussures recommandées
    $recommended_id_chaussures = array_keys($top_recommendations);

    return $recommended_id_chaussures;
}
