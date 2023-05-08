<?php
session_start();
// Informations de connexion à la base de données
require_once('../config/connect.php');

try {
    $db = new Database();
    $conn = $db->getConnection();
    $table = "utilisateur";
    $id = "id_utilisateur";
    $mail = "mail";
    $id_utilisateur = (int)$_SESSION['id_utilisateur'];

    
    if(!empty($_POST['mail']) && !empty($_POST['password'])) {
        if ($_POST['mail'] == $_SESSION['mail']) {
            $req = $conn->prepare('SELECT motdepasse FROM utilisateur WHERE id_utilisateur = :id AND mail = :mail');
            $req->bindParam(':id', $_SESSION['id_utilisateur']);
            $req->bindParam(':mail', $_POST['mail']);
            $req->execute();
            $pw = $req->fetch();
            if(!empty($pw)) {
                if ($_POST['password'] == $pw['motdepasse']) {
                    $del = $conn->prepare("DELETE FROM utilisateur WHERE id_utilisateur = :id_utilisateur");
                    $del->bindParam(":id_utilisateur", $id_utilisateur);
                    $del->execute();
                    echo ("Compte supprimé");
                    session_destroy();
                    header("Location: ../index.php");
                } else {
                    echo ("Mot de passe incorrect");
                }
            }
            else
            {
                echo("aie");
            }            
        } else {
            echo ("Adresse e-mail ou mot de passe incorrect.");
        }
    }
    else {
        echo("Un des champs n'a pas été entré correctement");
    }    
}
catch(PDOException $e) {
    echo("Erreur lors de la suppression du compte :" . $e->getMessage());
}
