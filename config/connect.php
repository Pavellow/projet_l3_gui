<?php
class Database{
    //Spécification des identifiants de la base de donnéess
    private $host = "localhost";
    private $db_name = "shoePEA";
    private $username = "root";
    private $password = "";

    public $conn;
    

    public function getConnection(){ //Fonction pour obtenir une connexion à la base de données
    $this->conn = null;
    try{  //Création d'une nouvelle connexion PDO
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname="
    . $this->db_name, $this->username, $this->password);
        $this->conn->exec("set names utf8");
        
    }catch(PDOException $exception){  //Affichage d'un message d'erreur en cas d'échec de la connexion
        echo "Connection error: " . $exception->getMessage();
    }
    return $this->conn;
    }

    public function disconnect() { //Fonction pour fermer la connexion à la base de données
        $this->conn = null;
    }


    public function isConnected() {//Fonction pour vérifier si une connexion est active à la base de données
        if($this->conn) {
            return "Connecté à la BDD";
        }
        return false;
    }

}
