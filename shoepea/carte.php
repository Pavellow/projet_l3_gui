<?php

require_once 'db.php';

function insertChoix($json){
    $jjson = json_decode($json);
    $db = getDatabase();
    $sql = "INSERT INTO Choix (id_chaussure, id_utilisateur, choix) VALUES (:id_chaussure, :id_tag, :choix)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_chaussure', $jjson->id_chaussure);
    $stmt->bindParam(':id_tag', $jjson->id_tag);
    $stmt->bindParam(':choix', $jjson->choix);
    $stmt->execute();
}








?>