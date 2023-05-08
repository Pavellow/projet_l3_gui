<?php 
require_once 'db.php';

function getShoes() {
    $db = getDatabase();
    $id= $_POST['number'];
    $sql = "SELECT * FROM Chaussure WHERE id_chaussure = $id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


foreach (getShoes() as $shoe) {
    echo $shoe['modèle'];
  }

  function ggetShoes() {
    $db = getDatabase();
    $sql = "SELECT * FROM Chaussure";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

foreach (ggetShoes() as $shoe) {
        echo $shoe['modèle'];
        echo '<br>';
    }

function getShoesSexe($id){
    $db = getDatabase();
    $sql = "SELECT DISTINCT modèle FROM Chaussure INNER JOIN Chaussure_tags ON Chaussure.id_chaussure = Chaussure_tags.id_chaussure WHERE id_tag = $id or id_tag = 72";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}







?>