/* VAR */

var x;

/* GET ELEMENTS */

var bouton = document.getElementById("show");
var panelGauche = document.getElementById("container-panel-left");
var panelCentral = document.getElementById("container-panel-main");

/* FONCTIONS */

function showFilters() {
    x = !x;
    /*
    if(!x) {
        panelGauche.style.gridColumn = "1/4";
        panelCentral.style.gridColumn = "4/13";
        console.log("1/4");
    }
    else {
        panelGauche.style.gridColumn = "1/2";
        panelCentral.style.gridColumn = "2/13";
        console.log("0");
    }
    */
    if(x) {
        panelGauche.classList.remove("container-panel-left-hidden");
        panelGauche.classList.add("container-panel-left-show");
        console.log("eof");

        panelCentral.classList.remove("container-panel-main-hidden");
        panelCentral.classList.add("container-panel-left-show");
    }
    else {
        panelCentral.classList.remove("container-panel-main-show");
        panelCentral.classList.add("container-panel-left-hidden");

        panelCentral.classList.remove("container-panel-main-show");
        panelCentral.classList.add("container-panel-left-show");
    }

}

/* LISTENERS */

bouton.addEventListener("click", showFilters, false);