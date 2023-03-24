<?php

require_once('../config/connect.php');

$db = new Database();

session_start();

if(isset($_POST["connect_submit"])) {
    extract($_POST);

    if(!empty($email) && !empty($motdepasse)) {
        $conn = $db->getConnection();
        $sql = $conn->prepare("SELECT * FROM `utlisateur` WHERE `mail` = :email");
        $sql->bindParam(":email", $mail);
        $resultatRequete = $sql->fetch();

        if($resultatRequete == true) {
            try {
                if(password_verify($motdepasse, $resultatRequete['motdepasse'])) {
                    $echo("Vous êtes connecté, bha7tek");
                    $_SESSION['mail'] = $resultatRequete["mail"];
                    header('Location: ../index.php');
                }
            }
            catch(PDOException $e) {
                echo($e);
            }
            
        }
    }
}