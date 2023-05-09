<?php

class Shoes
{
    // specify your own database credentials
    public $id;
    public $modele;
    public $image;
    public $id_utilisateur;
    public $like;

    private $conn;

    // get the database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function get_all()
    {
        $query = "SELECT * FROM chaussure";
        $statement = $this->conn->query($query);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($result));
    }

    public function like() {
        $query = "INSERT INTO `utilisateur_like` (`id_utilisateur`, `id_chaussure`, `likedislike`) VALUES (:id_user, :id_shoe, :likedislike);";

        $statement = $this->conn->prepare($query);
        $statement->bindParam(":id_user", $this->id_utilisateur);
        $statement->bindParam("id_shoe", $this->id);
        $statement->bindParam(":likedislike", $this->like);

        if($statement->execute()) {
            echo(json_encode("c'est bon"));
        }
    }
}
