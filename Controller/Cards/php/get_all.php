<?php 

require_once("../../../Model/Database.php");
require_once("../../../Model/Shoes.php");

$db = new Database();

$conn = $db->getConnection();

$shoes = new Shoes($conn);

$shoes->get_all();
?>