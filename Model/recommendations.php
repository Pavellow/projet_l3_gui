<?php

require_once("Database.php");


$db = new Database();


function get_preferences($id_utilisateur)
{
    global $db;
    $sql = "SELECT id_chaussure, likedislike FROM utilisateur_like WHERE id_utilisateur = :id_utilisateur";
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


function get_all_preferences($id_utilisateur)
{
    global $db;
    $stmt = $db->getConnection()->prepare("SELECT id_utilisateur, id_chaussure, rating FROM shoe_preferences WHERE id_utilisateur != :id_utilisateur");
    $stmt->execute(array(':id_utilisateur' => $id_utilisateur));

    // Stocker les préférences de chaussures de tous les autres utilisateurs dans un tableau associatif
    $other_users_prefs = array();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id_utilisateur = $row['id_utilisateur'];
        $id_chaussure = $row['id_chaussure'];
        $rating = $row['rating'];
        if (!isset($other_users_prefs[$id_utilisateur])) {
            $other_users_prefs[$id_utilisateur] = array();
        }
        $other_users_prefs[$id_utilisateur][$id_chaussure] = $rating;
    }

    return $other_users_prefs;
}

function getShoes()
{
    global $db;
    $stmt = $db->getConnection()->prepare("SELECT * FROM chaussure");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
