<?php
// Informations de connexion à la base de données
require_once('../config/connect.php');

try {
    // Connexion à la base de données avec PDO
    $db = new Database();
    $conn = $db->getConnection();
    echo ($db->isConnected());
    // Préparation de la requête pour récupérer l'utilisateur avec l'email et le mot de passe saisis
    $statement = $conn->prepare("SELECT * FROM utilisateur WHERE mail = :mail AND motdepasse = :motdepasse");
    // Liaison des valeurs aux paramètres de la requête
    $statement->bindParam(':mail', $_POST['mail']);
    $statement->bindParam(':motdepasse', $_POST['motdepasse']);
    // Exécution de la requête
    $statement->execute();
    // Récupération de l'utilisateur correspondant aux identifiants saisis
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    // Vérification de la validité des identifiants
    if ($user) {
        session_start();
        $_SESSION['id_utilisateur'] = $user['id_utilisateur'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['pseudo'] = $user['pseudo'];
        // Redirection vers la page d'accueil du site
        header('Location: ../index.php');
        // Les identifiants sont valides, on peut connecter l'utilisateur


    } else {
        // Les identifiants sont invalides, affichage d'un message d'erreur
        echo "Adresse email ou mot de passe incorrect";
    }
} catch (PDOException $e) {
    // Affichage d'un message d'erreur en cas d'échec de la connexion à la base de données
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
