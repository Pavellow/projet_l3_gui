<?php
require_once 'db.php';

$chaussure = $_GET['chaussure'];



function addChaussureTags($id_tag)
{
    $db = getDatabase();
    $sql = "INSERT INTO Chaussure_tags (id_chaussure, id_tag) VALUES (:id_chaussure, :id_tag)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id_chaussure', $id_chaussure);
    $stmt->bindParam(':id_tag', $id_tag);
    $stmt->execute();
    return $db->lastInsertId();
}


function getChaussure($chaussure)
{
    $db = getDatabase();
    $sql = "SELECT * FROM Chaussure WHERE id_chaussure = $chaussure";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $shoe) {
        return $shoe['modèle'];
    }
}


function getInfos($chaussure)
{
    $db = getDatabase();
    $sql = "SELECT * FROM Tags INNER JOIN Chaussure_tags ON Tags.id_tag = Chaussure_tags.id_tag WHERE id_chaussure = $chaussure";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}




echo getChaussure($chaussure);
echo '<br>';
echo 'Voici les tags de cette chaussure :';
echo '<br>';
foreach (getInfos($chaussure) as $info) {
    echo $info['nom_tag'];
    echo '<a href="deltag.php?tag=', $info['id_tag'], '&chaussure=', $chaussure, '"<button>Delete Tag</button></a>';
    echo '<br>';
}




function getTags($chaussure)
{
    $db = getDatabase();
    $sql = "SELECT * FROM Tags WHERE id_tag NOT IN (SELECT id_tag FROM Chaussure_tags WHERE id_chaussure = $chaussure)";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTag()
{
    $db = getDatabase();
    $sql = "SELECT * FROM Tags";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
echo '<br>';
echo 'Ajouter un tag :';
echo '<form action="addtag.php" method="post">';
echo '<select name="tag">';
foreach (getTag() as $tag) {
    echo '<option value="', $tag['id_tag'], '">', $tag['id_tag'], " - ", $tag['nom_tag'], '</option>';
}
echo '</select>';
echo '<input type="hidden" name="chaussure" value="', $chaussure, '">';
echo '<input type="submit" value="Ajouter">';
