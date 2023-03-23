<?php

require_once('../config/connect.php');

$db = new Database();

if(isset($_POST["connect_submit"])) {
    extract($_POST);

    if(!empty($email) && !empty($motdepasse)) {
        $conn = $db->getConnection();
        $sql = $conn->prepare("SELECT * FROM `utlisateur` WHERE email = :email");
    }
}