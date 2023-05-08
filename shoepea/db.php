
<?php

const DB_HOST = "localhost";
const DB_PORT = "8888";
const DB_NAME = "ShoePEA";
const DB_USER = "root";
const DB_PWD = "root";


function getDatabase() {
    static $db = null;
  
    if ($db == null) {
      $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
      $db = new PDO($dsn, DB_USER, DB_PWD);
  
      // lever une exception si erreur
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
  
    return $db;
  }


?>