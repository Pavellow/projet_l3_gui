<?php

require_once('../config/connect.php');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['motdepasse'];
    $pseudo = $_POST['pseudo'];
    // Chiffrer le mot de passe
    //$mot_de_passe_chiffre = password_hash($mot_de_passe, PASSWORD_DEFAULT, ['cost' => 12]);

}
// Préparer la requête SQL d'insertion
try {

    $conn = $db->getConnection();
    $prep = $conn->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `mail`, `motdepasse`, `pseudo`) VALUES (:nom, :prenom, :mail, :motdepasse, :pseudo)");
    $prep->bindParam(':nom', $nom, PDO::PARAM_STR);
    $prep->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $prep->bindParam(':mail', $email, PDO::PARAM_STR);
    $prep->bindParam(':motdepasse', $mot_de_passe, PDO::PARAM_STR);
    $prep->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    // Exécuter la requête SQL
    try {
        $prep->execute();
        echo ("Vous êtes inscrit");
        
        exit();
    } catch (PDOException $exception) {
        echo ("Connection error: " . $exception->getMessage());
    }
} catch (PDOException $e) {
    echo ($e);
}
