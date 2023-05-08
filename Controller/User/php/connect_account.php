<?php

require_once("../../../Model/Database.php");
require_once("../../../Model/User.php");

try {
    $db = new Database();
    $conn = $db->getConnection();
    
    $user = new User($conn);

    $user->mail = $_POST["mail"];
    $user->password = $_POST["motdepasse"];

    $user->connect();
    // Préparation de la requête pour récupérer l'utilisateur avec l'email et le mot de passe saisis
    var_dump($_SESSION);
    
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas d'échec de la connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
