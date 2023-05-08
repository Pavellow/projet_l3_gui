<?php

class User
{
    // specify your own database credentials
    public $username;
    public $password;
    public $email;
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
        /*         $statement = $conn->prepare("SELECT * FROM utilisateur WHERE mail = :mail AND motdepasse = :motdepasse");
    // Liaison des valeurs aux paramètres de la requête
    $statement->bindParam(':mail', $_POST['mail']);
    $statement->bindParam(':motdepasse', $_POST['motdepasse']);
    // Exécution de la requête
    $statement->execute();
    // Récupération de l'utilisateur correspondant aux identifiants saisis
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    // Vérification de la validité des identifiants
    if ($user) {
        $update_time = $conn->prepare("UPDATE `utilisateur` SET `date_connexion`= CURRENT_TIME WHERE mail = :mail");
        $update_time->bindParam(':mail', $_POST['mail']);
        $update_time->execute();
        session_start();
        $_SESSION['id_utilisateur'] = $user['id_utilisateur'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['mail'] = $user['mail'];
        $_SESSION['pseudo'] = $user['pseudo'];

        // Redirection vers la page d'accueil du site
        header('Location: ../index.php');
        // Les identifiants sont valides, on peut connecter l'utilisateur


    } else {
        // Les identifiants sont invalides, affichage d'un message d'erreur
        echo "Adresse email ou mot de passe incorrect";
    } */
        $query = "SELECT * FROM utilisateur WHERE mail = :mail AND motdepasse = :motdepasse";

        $statement = $this->conn->prepare($query);

        $statement->bindParam(":mail", $this->email);
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
                header('Location: ../index.php');
            }
        }
    }
}
