<?php

require_once('../config/connect.php');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['motdepasse'];
    // Chiffrer le mot de passe
    $mot_de_passe_chiffre = password_hash($mot_de_passe, PASSWORD_DEFAULT);

}
// Préparer la requête SQL d'insertion
try {

    $conn = $db->getConnection();
    $prep = $conn->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `mail`, `motdepasse`) VALUES (:nom, :prenom, :mail, :motdepasse)");
    $prep->bindParam(':nom', $nom, PDO::PARAM_STR);
    $prep->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $prep->bindParam(':mail', $email, PDO::PARAM_STR);
    $prep->bindParam(':motdepasse', $mot_de_passe_chiffre, PDO::PARAM_STR);
    // Exécuter la requête SQL
    try {
        $prep->execute();
        echo ("Requête exécutée");
        header('Location: ../index.html');
        exit();
    } catch (PDOException $exception) {
        echo ("Connection error: " . $exception->getMessage());
    }
} catch (PDOException $e) {
    echo ($e);
}
