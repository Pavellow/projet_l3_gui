<?php

if(!empty($_SESSION['pseudo'])) {
    ?>
    <h3>Compte</h3>
    <nav>
        <ul>
            <li><a href="../services/delete_account.php">Supprimer le compte</a></li>
            <li><a href="../services/show_informations.php">Afficher toutes les informations de votre compte</a></li>
            <li><a href="../services/change_password.php">Changer le mot de passe</a></li>
            <li><a href="../services/change_mail.php">Changer l'adresse e-mail</a></li>
        </ul>
    </nav>

    <?php
}

?>