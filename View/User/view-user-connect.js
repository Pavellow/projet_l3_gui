var form = document.querySelector("form");
var mail = document.querySelector("#mail");
var mdp = document.querySelector("#motdepasse");

form.addEventListener("submit", function(event) {
    event.preventDefault();

    console.log("aa");
    var user = new User();
    user.username = mail.value;
    user.mdp = mdp.value;
    user.connect();
});