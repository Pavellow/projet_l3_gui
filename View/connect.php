<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Définition de l'encodage de caractères utilisé -->
    <meta charset="UTF-8">
    <!-- Définition de la compatibilité avec Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Définition de l'affichage pour les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Inclusion de la feuille de style principale -->
    <link rel="stylesheet" href="../public/style/main.css">
    <!-- Inclusion de la feuille de style pour la page de connexion -->
    <link rel="stylesheet" href="../public/style/connect.css">
    <!-- Définition du titre de la page -->
    <title>Accueil</title>
</head>

<body>
    <?php require_once("../includes/header.php"); ?>
    <!-- Section d'accueil -->
    <div id="welcome">
        <p>Se connecter</p>
    </div>
    <!-- Formulaire de connexion -->
    <div class="center">
        <form method="post">
            <label for="mail">Email :</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse email" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" required>

            <button type="submit" name="connect_submit" value="Ajouter">Connexion</button>
            <!-- Lien vers la page d'inscription -->
            <div id="signup">
                <a href="../View/signup.php">S'inscrire</a>
            </div>
        </form> <!-- Fin du formulaire -->
    </div> <!-- Fin de la section du formulaire -->

    <?php require_once("../includes/footer.php"); ?>
    <!-- Inclusion des scripts JavaScript -->
    <script src="../Controller/User/User.js"></script>
    <script src="../View/User/view-user-connect.js"></script>
</body>

</html>
