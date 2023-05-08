<?php 
session_start(); // Démarrage de la session

// Vérification si l'utilisateur est connecté
if(!empty($_SESSION['pseudo'])) {
    // Si l'utilisateur est connecté, on crée deux cookies pour stocker son id et son pseudo
    setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
    setcookie('cookie_pseudo', $_SESSION['pseudo']);
}
else { 
    // Si l'utilisateur n'est pas connecté, on le redirige vers la page de connexion
    header('Location: ./view/connect.php');
}
?>

<!-- Début du code HTML -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style/main.css">
    <link rel="stylesheet" href="./public/style/index.css">
    <title>Accueil</title>
</head>
<body>
    <?php require_once("./includes/header.php");?> <!-- Inclusion de l'en-tête -->
    <div id="welcome">
        <p>Bienvenue.</p> <!-- Message de bienvenue -->
    </div>
    <p>Bonjour, <?php echo($_SESSION["pseudo"]); ?> <!-- Affichage du pseudo de l'utilisateur -->
    <?php require_once("./includes/footer.php");?> <!-- Inclusion du pied de page -->
</body>
</html>
