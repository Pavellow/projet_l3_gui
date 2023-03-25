<header>
    <a href="index.php"> <img src="images/logo/png/logo.png" class="logo">  </a>
    
    <nav>
        <ul>
            <li>parametres</li>
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