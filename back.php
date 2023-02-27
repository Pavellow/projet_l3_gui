<?php
require_once './config/db.php';



function getDatabase() {
    static $db = null;
  
    if ($db == null) {
      $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
      $db = new PDO($dsn, DB_USER, DB_PWD);
  
      // lever une exception si erreur
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
  
    return $db;
  }


function getShoes($sexe = NULL, $taille = NULL, $prix = NULL) {
    $db = getDatabase();
    $sql = "SELECT * FROM shoes where sexe = '$sexe' and taille = '$taille' and prix = '$prix'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }




  
?>