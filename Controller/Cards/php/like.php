<?php
require_once("../../../Model/Database.php");
require_once("../../../Model/Shoes.php");

$db = new Database();

$conn = $db->getConnection();

$shoes = new Shoes($conn);

$id_user = $_COOKIE["cookie_id_utilisateur"];

$shoes->id = $_POST["id_chaussure"];
$shoes->id_utilisateur = $id_user;
$shoes->like = $_POST["likedislike"];

$shoes->like();
?>