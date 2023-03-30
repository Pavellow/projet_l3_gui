<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
</head>
<body>
    
    <?php include("../../includes/settings_header.php"); ?>
    <p>Êtes-vous sûr(e) de vouloir modifier votre compte ?</p>
    <div class="center">
        <a href="../../services/authentificate.php">Oui</a>
        <a href="../">Non</a>
    </div>
</body>
</html>