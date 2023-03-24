<?php 

session_start();

/*session is started if you don't write this line can't use $_Session  global variable*/

$_SESSION["mail"]= $value;

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style/index.css"
</head>
<body>
    <header>
        <h1>NOMSITE</h1>
        <nav>
            <ul>
                <li>parametres</li>
                <li><a href="./view/signin.html">inscription</a></li>
                <li><a href="./view/connexion.html">connexion</a></li>
                <li>sombre</li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="container-main">
            <div class="photo-desc">
                <img src="images/background.png" alt="texte" loading="lazy" class="img-chaus" id="img-chaus" />
                <p id="description">Description</p>
            </div>
            <div class="boutons">
                <button id="bouton-non" class="button-main">Non</button>
                <button id="bouton-retour" class="button-main">Retour</button>
                <button id="bouton-oui" class="button-main">Oui</button>
            </div>
        </div>
        
    </main>
    <footer>
        <p>Projet L3 GUI - IHM</p>
        <p>Antoine Maréchal-Bale -- Alexandre Rech-Simoni -- Paul-Antoine Vinciguerra</p>
    </footer>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</html>
