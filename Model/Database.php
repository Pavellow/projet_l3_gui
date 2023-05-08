<?php

/* require_once("init_db.php"); */

class Database{
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "shoepea";
    private $username = "root";
    private $password = "";

    public $conn;

    // get the database connection
    public function getConnection(){
    $this->conn = null;
    try{
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname="
    . $this->db_name, $this->username, $this->password);
        $this->conn->exec("set names utf8");
        
    }catch(PDOException $exception){
        echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
    }
    public function disconnect() {
        $this->conn = null;
    }
    public function isConnected() {
        if($this->conn) {
            return "Connecté à la BDD";
        }
        return false;
    }

    public function show() {
        echo("Je suis " . $this->host . "la BDD connectée est " . $this->db_name . ";");

    }
}
