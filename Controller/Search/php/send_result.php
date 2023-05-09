<?php 

require_once('../../../Controller/Back/reco.php');
require_once("../../../Model/Database.php");

var_dump($_COOKIE);

$id_user = $_COOKIE["cookie_id_utilisateur"];

$a = get_user_based_recommendations($id_user, 5);

var_dump($a);
echo("are");
?>