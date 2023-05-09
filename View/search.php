<?php 
session_start(); // On démarre la session AVANT toute chose
if(!empty($_SESSION['pseudo'])) {
    setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
    setcookie('cookie_pseudo', $_SESSION['pseudo']);
}
else { // Si le pseudo n'existe pas dans la session, on redirige vers la page de connexion
    header('Location: http://127.0.0.1/IHM/View/connect.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/main.css">
    <link rel="stylesheet" href="../public/style/search.css">
    <title>Recherche</title>
</head>

<body>
    <?php require_once("../includes/header.php"); ?>
    <form method="post">
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-header">
                    Couleur primaire
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="couleur-primaire-rouge" value="Rouge"> Rouge
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-noir" value="Noir"> Noir
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-blanc" value="Blanc"> Blanc
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-bleu" value="Bleu"> Bleu
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-vert" value="Vert"> Vert
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-jaune" value="Jaune"> Jaune
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-marron" value="Marron"> Marron
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-gris" value="Gris"> Gris
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-rose" value="Rose"> Rose
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-violet" value="Violet"> Violet
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-orange" value="Orange"> Orange
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-or" value="Or"> Or
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-argent" value="Argent"> Argent
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-primaire-bronze" value="Bronze"> Bronze
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Couleur secondaire
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="couleur-secondaire-rouge" value="Rouge"> Rouge
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-noir" value="Noir"> Noir
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-blanc" value="Blanc"> Blanc
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-bleu" value="Bleu"> Bleu
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-vert" value="Vert"> Vert
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-jaune" value="Jaune"> Jaune
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-marron" value="Marron"> Marron
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-gris" value="Gris"> Gris
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-rose" value="Rose"> Rose
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-violet" value="Violet"> Violet
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-orange" value="Orange"> Orange
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-or" value="Or"> Or
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-argent" value="Argent"> Argent
                    </label>
                    <label>
                        <input type="checkbox" name="couleur-secondaire-bronze" value="Bronze"> Bronze
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Matière
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="matiere-cuir" value="Cuir"> Cuir
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-daim" value="Daim"> Daim
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-nubuck" value="Nubuck"> Nubuck
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-toile" value="Toile"> Toile
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-mesh" value="Mesh"> Mesh
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-synthetique" value="Synthetique"> Synthétique
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-caoutchouc" value="Caoutchouc"> Caoutchouc
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-coton" value="Coton"> Coton
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-impermeable" value="Impermeable"> Imperméable
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-paillettes" value="Paillettes"> Paillettes
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-velours" value="Velours"> Velours
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-similicuir" value="Simili-cuir"> Simili-cuir
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-laine" value="Laine"> Laine
                    </label>
                    <label>
                        <input type="checkbox" name="matiere-fourrure" value="Fourrure"> Fourrure
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Fermeture
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="fermeture-sanslacets" value="Sans_lacets"> Sans lacets
                    </label>
                    <label>
                        <input type="checkbox" name="fermeture-lacets" value="Lacets"> Lacets
                    </label>
                    <label>
                        <input type="checkbox" name="fermeture-scratch" value="Scratch"> Scratch
                    </label>
                    <label>
                        <input type="checkbox" name="fermeture-zip" value="Zip"> Zip
                    </label>
                    <label>
                        <input type="checkbox" name="fermeture-boucle" value="Lacets"> Boucle
                    </label>
                    <label>
                        <input type="checkbox" name="fermeture-eclair" value="Eclair"> Eclair
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Style
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="style-baskets" value="Baskets"> Baskets/Sneakers
                    </label>
                    <label>
                        <input type="checkbox" name="style-bottes" value="Bottes"> Bottes
                    </label>
                    <label>
                        <input type="checkbox" name="style-sandales" value="Sandales"> Sandales
                    </label>
                    <label>
                        <input type="checkbox" name="style-mocassins" value="Mocassins"> Mocassins
                    </label>
                    <label>
                        <input type="checkbox" name="style-escarpins" value="Escarpins"> Escarpins
                    </label>
                    <label>
                        <input type="checkbox" name="style-derby" value="Derby"> Derby
                    </label>
                    <label>
                        <input type="checkbox" name="style-oxford" value="Oxford"> Oxford
                    </label>
                    <label>
                        <input type="checkbox" name="style-mules" value="Mules"> Mules
                    </label>
                    <label>
                        <input type="checkbox" name="style-chaussons" value="Chaussons"> Chaussons
                    </label>
                    <label>
                        <input type="checkbox" name="style-tongs" value="Tongs"> Tongs
                    </label>                    
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Utilité
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="utilite-randonnee" value="Randonnée"> Randonnée
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-ville" value="Ville"> Ville
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-football" value="Football"> Football
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-golf" value="Golf"> Golf
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-basketball" value="Basketball"> Basketball
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-tennis" value="Tennis"> Tennis
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-running" value="Running"> Running
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-trail" value="Trail"> Trail
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-fitness" value="Fitness"> Fitness
                    </label>
                    <label>
                        <input type="checkbox" name="utilite-skate" value="Skate"> Skate
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Sexe
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="sexe-homme" value="Homme"> Homme
                    </label>
                    <label>
                        <input type="checkbox" name="sexe-femme" value="Femme"> Femme
                    </label>
                    <label>
                        <input type="checkbox" name="sexe-unisexe" value="Unisexe"> Unisexe
                    </label>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-header">
                    Prix
                </div>
                <div class="accordion-content">
                    <label>
                        <input type="checkbox" name="prix-moinsde50" value="-50"> Moins de 50€
                    </label>
                    <label>
                        <input type="checkbox" name="prix-50et100" value="50-100"> 50€ - 100€
                    </label>
                    <label>
                        <input type="checkbox" name="prix-100et200" value="50-100"> 100€ - 200€
                    </label>
                    <label>
                        <input type="checkbox" name="prix-plusde200" value="+200"> Plus de 200€
                    </label>
                </div>
            </div>

            <div id="submit-btn">
                <button type="submit">Chercher</button>                
            </div>
            
            <div id="skip">
                <a href="./cartes.php">Outrepasser recherche</a>
            </div>

    </form>

    </div>
    <?php require_once("../includes/footer.php"); ?>
</body>

<script src="../Controller/Search/Search.js"></script>
<script src="../View/Search/search.js"></script>

</html>