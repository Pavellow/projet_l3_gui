var btn = document.querySelector("header button");

btn.addEventListener("click", function() {
    var a = new Utilisateur();
    a.disconnect();
    console.log("disconnect");
    
});