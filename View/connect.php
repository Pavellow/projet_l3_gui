<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/main.css">
    <link rel="stylesheet" href="../public/style/connect.css">
    <title>Accueil</title>
</head>

<body>
    <?php require_once("../includes/header.php"); ?>
    <div id="welcome">
        <p>Se connecter</p>
    </div>
    <div class="center">
        <form method="post">
            <label for="mail">Email :</label>
            <input type="text" name="mail" id="mail" placeholder="Adresse email" required>

            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" required>

            <button type="submit" name="connect_submit" value="Ajouter">Connexion</button>
            <div id="signup">
                <a href="../View/signup.php">S'inscrire</a>
            </div>
    </div>
    </form>


    </div>



    <?php require_once("../includes/footer.php"); ?>
</body>
<script src="../Controller/User/User.js"></script>
<script src="../View/User/view-user-connect.js"></script>

</html>