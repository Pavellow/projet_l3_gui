// Récupération du formulaire et des éléments input email et mot de passe
var form = document.querySelector("form");
var mail = document.querySelector("#mail");
var mdp = document.querySelector("#motdepasse");

// Ajout d'un événement submit sur le formulaire
form.addEventListener("submit", function(event) {
    event.preventDefault();

    console.log("aa");
    var user = new User(); // Création d'un nouvel utilisateur et récupération des valeurs des champs email et mot de passe
    user.username = mail.value;
    user.mdp = mdp.value;
    user.connect();// Connexion de l'utilisateur
});