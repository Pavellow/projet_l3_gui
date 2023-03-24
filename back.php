<?php
require_once './config/db.php';


function getDatabase()
{
    static $db = null;

    if ($db == null) {
        $dsn = 'mysql:host=' . $DB_HOST . ';port=' . $DB_PORT . ';dbname=' . $DB_NAME . ';charset=utf8';
        $db = new PDO($dsn, $DB_USER, $DB_PWD);

        // lever une exception si erreur
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $db;
}
function addMember()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Récupérer les données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Chiffrer le mot de passe
        $mot_de_passe_chiffre = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    }

    // Préparer la requête SQL d'insertion
    $requete = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe_chiffre')";
    $connexion = getDatabase();
    // Exécuter la requête SQL
    if ($connexion->query($requete) === TRUE) {
        echo "L'utilisateur a été ajouté avec succès!";
    } else {
        echo "Erreur: ";
    }
}


function reco()
{
    $db = getDatabase();
    // Récupérer l'id de l'utilisateur connecté
    $id_utilisateur = $_SESSION['id_utilisateur'];

    // Récupérer les chaussures aimées par l'utilisateur
    $chaussures_aimées = array();
    $sql = "SELECT id_chaussure FROM MatchChaussure WHERE id_utilisateur = :id_utilisateur AND like_dislike = 'l'";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id_utilisateur', $id_utilisateur);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $chaussures_aimées[] = $row['id_chaussure'];
    }

    // Récupérer les tags des chaussures aimées par l'utilisateur
    $tags_utilisateur = array();
    foreach ($chaussures_aimées as $id_chaussure) {
        $sql = "SELECT tag FROM ChaussureTag WHERE id_chaussure = :id_chaussure";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id_chaussure', $id_chaussure);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tags_utilisateur[] = $row['tag'];
        }
    }

    // Récupérer les chaussures correspondant aux tags des chaussures aimées par l'utilisateur
    $chaussures_recommandées = array();
    foreach ($tags_utilisateur as $tag) {
        $sql = "SELECT DISTINCT c.id_chaussure, c.nom, c.description, c.image FROM Chaussure c JOIN ChaussureTag ct ON c.id_chaussure = ct.id_chaussure WHERE ct.tag = :tag AND c.id_chaussure NOT IN (" . implode(',', $chaussures_aimées) . ")";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':tag', $tag);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id_chaussure = $row['id_chaussure'];
            if (!isset($chaussures_recommandées[$id_chaussure])) {
                $chaussures_recommandées[$id_chaussure] = array(
                    'nom' => $row['nom'],
                    'description' => $row['description'],
                    'image' => $row['image'],
                    'nb_tags_communs' => 0
                );
            }
            $chaussures_recommandées[$id_chaussure]['nb_tags_communs']++;
        }
    }

    // Trier les chaussures recommandées par nombre de tags en commun
    usort($chaussures_recommandées, function ($a, $b) {
        return $b['nb_tags_communs'] - $a['nb_tags_communs'];
    });

    // Afficher les chaussures recommandées
    foreach ($chaussures_recommandées as $chaussure) {
        echo "<h2>" . $chaussure['nom'] . "</h2>";
        echo "<img src='" . $chaussure['image'] . "' />";
        echo "<p>" . $chaussure['description'] . "</p>";
    }
}

?>