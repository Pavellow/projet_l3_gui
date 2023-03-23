<?php

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
    $requete = "INSERT INTO Utilisateur (nom, prenom, email, mot_de_passe) VALUES ('$nom', '$prenom', '$email', '$mot_de_passe_chiffre')";
    $connexion = getDatabase();
    // Exécuter la requête SQL
    if ($connexion->query($requete) === TRUE) {
        echo "L'utilisateur a été ajouté avec succès!";
    } else {
        echo "Erreur: ";
    }
}

?>