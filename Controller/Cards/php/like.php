<?php 

require_once("../../../Model/Database.php");
require_once("../../../Model/Shoes.php");

$db = new Database();

$conn = $db->getConnection();

$shoes = new Shoes($conn);

$shoes->id = $_POST["id_chaussure"];
$shoes->id_utilisateur = $_SESSION["id_utilisateur"];
$shoes->like = $_POST["likedislike"];

$shoes->like();
?>