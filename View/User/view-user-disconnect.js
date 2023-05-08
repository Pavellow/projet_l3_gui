var btn = document.querySelector("header button");

btn.addEventListener("click", function() {
    var user = new User();
    user.disconnect();
    console.log("disconnect");
    
});