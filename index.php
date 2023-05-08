<?php 
session_start(); // On démarre la session AVANT toute chose
if(!empty($_SESSION['pseudo'])) {
    setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
    setcookie('cookie_pseudo', $_SESSION['pseudo']);
}
else { // Si le pseudo n'existe pas dans la session, on redirige vers la page de connexion
    header('Location: ./view/connexion.html');
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
            <a href="info.php?id=1"><img src="https://images.stockx.com/360/Air-Jordan-3-Retro-White-Cement-Reimagined/Images/Air-Jordan-3-Retro-White-Cement-Reimagined/Lv2/img01.jpg" alt="Air Jordan 3 Retro White Cement Reimagined" /></a>
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
<script src="js/cards/model/card.js"></script>
<script src="js/cards/view/card_display.js"></script>
<script src="js/cards/controller/card_controller.js"></script>
<script src="js/index.js"></script>
</html>