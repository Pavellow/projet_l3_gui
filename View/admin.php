<?php
require_once 'db.php';


function addChaussure($modele){
    $db = getDatabase();
    $sql = "INSERT INTO Chaussure (modèle) VALUES (:modele)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':modele', $modele);
    $stmt->execute();
    return $db->lastInsertId();
}





function getShoes() {
    $db = getDatabase();
    $sql = "SELECT * FROM Chaussure";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

foreach (getShoes() as $shoe) {
    echo $shoe['modèle'];
    echo '<a href="gestion.php?chaussure=',$shoe['id_chaussure'],'"<button>Edit Chaussure</button></a>';
    echo '<br>';
  }

 