<?php
// Inclure le fichier db.php pour se connecter à la base de données
require_once('config/db.php');

// Vérifier si l'ID de la chaussure est défini dans l'URL
if (isset($_GET['id_chaussure'])) {
    $id_chaussure = $_GET['id_chaussure'];

    // Récupérer les informations de la chaussure depuis la base de données
    $pdo = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4", $DB_USER, $DB_PWD);
    $requete = "SELECT Chaussure.*, GROUP_CONCAT(Tags.nom_tag SEPARATOR ', ') AS tags FROM Chaussure INNER JOIN Chaussure_Tags ON Chaussure.id_chaussure = Chaussure_Tags.id_chaussure INNER JOIN Tags ON Chaussure_Tags.id_tag = Tags.id_tag WHERE Chaussure.id_chaussure=:id_chaussure";
    $stmt = $pdo->prepare($requete);
    $stmt->execute(['id_chaussure' => $id_chaussure]);
    $chaussure = $stmt->fetch(PDO::FETCH_ASSOC);

    // Vérifier si la chaussure existe dans la base de données
    if (!$chaussure) {
        echo "Chaussure non trouvée.";
        exit;
    }

/*     // Récupérer les tailles de la chaussure depuis la base de données
    $requete = "SELECT * FROM Taille WHERE id_chaussure = :id_chaussure";
    $stmt = $pdo->prepare($requete);
    $stmt->execute(['id_chaussure' => $id_chaussure]);
    $tailles = $stmt->fetchAll(PDO::FETCH_ASSOC); */
} else {
    echo "ID de chaussure non spécifié.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informations sur la chaussure</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <h1><?php echo $chaussure['modèle']; ?></h1>
    
    <!-- <img src="<?php echo $chaussure['photo']; ?>" alt="Photo de la chaussure"> -->

    <!-- <p><?php echo $chaussure['description']; ?></p> -->

    <p><strong>Tags: </strong><?php echo $chaussure['tags']; ?></p>

  <!--   <h2>Tailles</h2>
    <form action="" method="POST">
        <?php foreach ($tailles as $taille): ?>
            <input type="checkbox" name="taille[]" value="<?php echo $taille['id_taille']; ?>"> <?php echo $taille['taille']; ?><br>
        <?php endforeach; ?> -->
        <br>
        <input type="submit" name="submit" value="Ajouter au panier">
    </form>
</body>
</html>
