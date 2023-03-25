<?php
require_once 'db.php';

$chaussure = $_POST['chaussure'];
$tag = $_POST['tag'];

echo $chaussure;
echo '<br>';

echo $tag;


function addChaussureTags($id_chaussure,$id_tag){
    $db = getDatabase();
    $sql = "INSERT INTO Chaussure_tags (id_chaussure, id_tag) VALUES (:id_chaussure, :id_tag)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_chaussure', $id_chaussure);
    $stmt->bindParam(':id_tag', $id_tag);
    $stmt->execute();
    echo "<script>alert('Tag ajouté !')</script>";
    
}


addChaussureTags($chaussure,$tag);