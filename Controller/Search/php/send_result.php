<?php 

require_once('../../../Controller/Back/reco.php');
require_once("../../../Model/Database.php");
$id_user = $_COOKIE["cookie_id_utilisateur"];

$a = get_user_based_recommendations($id_user, 5);
foreach ($a as $key => $value) {
    $arr = getShoe($key);
    $img = json_encode($arr);
}

echo($img);
?>