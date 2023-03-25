<?php 
session_start(); 
if(!empty($_SESSION['pseudo'])) {
    setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
    setcookie('cookie_pseudo', $_SESSION['pseudo']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<?php include("./includes/head.php"); ?>

<body>
    <?php include("./includes/header.php"); ?>
    <main>
        <div id="container-main">
            <div class="photo-desc">
                <img src="images/background.png" alt="texte" loading="lazy" class="img-chaus" id="img-chaus" />
                <p id="description">Description</p>
            </div>
            
            <div class="boutons">
                <button id="bouton-non" class="button-main">Non</button>
                <button id="bouton-retour" class="button-main">Retour</button>
                <button id="bouton-oui" class="button-main">Oui</button>
            </div>
        </div>
    </main>
    <?php include("./includes/footer.php"); ?>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</html>