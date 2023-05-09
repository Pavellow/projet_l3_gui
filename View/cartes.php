<?php
session_start(); // On démarre la session AVANT toute chose
if (!empty($_SESSION['pseudo'])) {
  setcookie('cookie_id_utilisateur', $_SESSION['id_utilisateur']);
  setcookie('cookie_pseudo', $_SESSION['pseudo']);
} else { // Si le pseudo n'existe pas dans la session, on redirige vers la page de connexion
  header('Location: http://127.0.0.1/IHM/View/connect.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="../public/style/main.css">
  <link rel="stylesheet" href="../public/style/cartes.css">
  
  <title>Cartes</title>
</head>

<body>
  <header>
    <h1>SHOEPEA.</h1>
    <!-- <img src="public/img/logo.png" /> -->
  </header>
  <div class="tinder">
    <div class="tinder--cards">
      <!-- <div class="tinder--card">
        <img src="https://images.stockx.com/images/Air-Jordan-1-Retro-Low-OG-SP-Travis-Scott-Olive-W-Product.jpg?fit=fill&bg=FFFFFF&w=600&h=600&fm=avif&auto=compress&dpr=1&trim=color&updated_at=1679667531&q=57">
        <h3>Chaussure 1</h3>
        <p>Libellé de la chaussure 1</p>
      </div> -->
      <!-- <div class="tinder--card limited">
        <h3>:(</h3>
        <p>Pour l'instant, notre base de données n'est pas assez fournie en terme de chaussures, on vous permettra d'en
          choisir plus au fur et à mesure que la base de données grandira.</p>
        <p>Comptez sur nous !</p>
      </div> -->
    </div>
  </div>
  <footer>
    <nav>
      <ul>
        <li>
          <p>HOME</p>
        </li>
        <li>
          <p>SHOES</p>
        </li>
        <li>
          <p>ACCOUNT</p>
        </li>
      </ul>
    </nav>
  </footer>
</body>
<script src="../jquery.js"></script>

<script src="../hammer.js"></script>
<script src="../Controller/Cards/Cartes.js"></script>
<script src="./Cartes/carte.js"></script>

</html>