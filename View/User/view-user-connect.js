var form = document.querySelector("form");
var mail = document.querySelector("#mail");
var mdp = document.querySelector("#motdepasse");

form.addEventListener("submit", function(event) {
    event.preventDefault();
    var oe = new Utilisateur();
    oe.username = mail.value;
    oe.mdp = mdp.value;
    oe.connect();
});