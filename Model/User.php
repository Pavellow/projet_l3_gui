<?php

class User
{
    // specify your own database credentials
    public $username;
    public $password;
    public $mail;
    public $nom;
    public $prenom;

    private $conn;

    // get the database connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function connect()
    {
        $query = "SELECT * FROM utilisateur WHERE mail = :mail AND motdepasse = :motdepasse";

        $statement = $this->conn->prepare($query);

        $statement->bindParam(":mail", $this->mail);
        $statement->bindParam(":motdepasse", $this->password);

        if ($statement->execute()) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            if (isset($user) && !empty($user)) {
                session_start();
                $_SESSION['id_utilisateur'] = $user['id_utilisateur'];
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['mail'] = $user['mail'];
                $_SESSION['pseudo'] = $user['pseudo'];
                /* header('Location: ../index.php'); */
            }
        }
    }
}
