<?php

require_once './config/db.php'

function getDatabse() {
    try{
        $infos_db = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
        $conn = new PDO($infos_db, DB_USER, DB_PWD);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }
    
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
      echo "Erreur : " . $e->getMessage();
    }
    
    $conn = null;
}    
?>