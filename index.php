<?php 
session_start(); // On démarre la session AVANT toute chose
if(!empty($_SESSION['pseudo'])) {
    setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
    setcookie('cookie_pseudo', $_SESSION['pseudo']);
}
else { // Si le pseudo n'existe pas dans la session, on redirige vers la page de connexion
    header('Location: ./view/connect.php');
}
?>
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
    <?php require_once("./includes/header.php");?>
    <div id="welcome">
        <p>Bienvenue.</p>
    </div>
    <p>Bonjour, <?php echo($_SESSION["pseudo"]); ?>
    <?php require_once("./includes/footer.php");?>
</body>
</html>