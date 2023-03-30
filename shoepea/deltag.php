<?php
require_once 'db.php';

$chaussure = $_GET['chaussure'];
$tag = $_GET['tag'];

echo $chaussure;
echo '<br>';

echo $tag;


function delChaussureTags($id_chaussure, $id_tag)
{
    $db = getDatabase();
    $sql = "DELETE FROM Chaussure_tags WHERE id_chaussure = $id_chaussure AND id_tag = $id_tag";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_chaussure', $id_chaussure);
    $stmt->bindParam(':id_tag', $id_tag);
    $stmt->execute();
    echo "<script>alert('Tag retiré !')</script>";
}

delChaussureTags($chaussure, $tag);
