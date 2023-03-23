<?php

require_once('../config/connect.php');

$db = new Database();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    echo ("NOM RECUP");
    $prenom = $_POST['prenom'];
    echo ("PRENOM RECUP");
    $email = $_POST['email'];
    echo ("MAIL RECUP");
    $mot_de_passe = $_POST['motdepasse'];
    echo ("MDP RECUP");
    // Chiffrer le mot de passe
    $mot_de_passe_chiffre = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    echo ("MDP RECUP");
}
// Préparer la requête SQL d'insertion
try {

    $conn = $db->getConnection();
    $prep = $conn->prepare("INSERT INTO `utilisateur` (`nom`, `prenom`, `mail`, `motdepasse`) VALUES (:nom, :prenom, :mail, :motdepasse)");
    $prep->bindValue(':nom', $nom, PDO::PARAM_STR);
    $prep->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $prep->bindValue(':mail', $email, PDO::PARAM_STR);
    $prep->bindValue(':motdepasse', $mot_de_passe_chiffre, PDO::PARAM_STR);
    // Exécuter la requête SQL
    try {
        $prep->execute();
        echo ("Requête exécutée");
    } catch (PDOException $exception) {
        echo ("Connection error: " . $exception->getMessage());
    }
} catch (PDOException $e) {
    echo ($e);
}
