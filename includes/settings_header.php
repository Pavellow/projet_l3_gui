<header>
    <a href="../../index.php"> <img src="../../images/logo/png/logo.png" class="logo">  </a>
    
    <nav>
        <ul>
            <li><a href="./view/settings/setting.php">parametres</a></li>
            <?php
            if (!empty($_SESSION['pseudo'])) {
            ?><li><a><?php echo ($_SESSION['pseudo']); ?></a></li><?php
                                                                } else {
                                                                    echo ("<li><a href='./view/signin.html'>inscription</a></li>
                                                                                <li><a href='./view/connexion.html'>connexion</a></li>");
                                                                }
                                                                    ?>
            <li>sombre</li>
            <?php
            if (!empty($_SESSION['pseudo'])) {
            ?><li><a href="./services/disconnect_account.php">Se déconnecter</a></li><?php
                                                                                    }
                                                                                        ?>
        </ul>
    </nav>
</header>

<div class="compte_unique"> 
<?php
    
    echo("<h1>Paramètres</h1>");
    if(!empty($_SESSION['pseudo'])) {
        echo("<h2>" . $_SESSION['pseudo'] . ', gérez vos paramètres et données ici.</h2>');
    }
    else{
        echo("<h2>Configurez les paramètres de base du site.</h2>");
    }
?>
</div>