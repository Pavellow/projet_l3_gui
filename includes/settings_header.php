<?php
    echo("<h1>Paramètres</h1>");
    if(!empty($_SESSION['pseudo'])) {
        echo("<h2>" . $_SESSION['pseudo'] . ', gérez vos paramètres et données ici.</h2>');
    }
    else{
        echo("<h2>Configurez les paramètres de base du site.</h2>");
    }
?>