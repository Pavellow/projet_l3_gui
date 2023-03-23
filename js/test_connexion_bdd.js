var getHttpRequest = function () {
    var httpRequest = false;

    if (window.XMLHttpRequest) {
        httpRequest = new XMLHttpRequest();
        if (httpRequest.overridMineType) {
            httpRequest.overrideMineType('text/css');
        }
    }
    else if (window.ActiveObject) {
        try {
            httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            try {
                httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e) { }
        }
    }

    if (!httpRequest) {
        alert('Abandon: impossible de créer une instance XMLHTTP')
        return false;
    }

    return httpRequest;

}

var httpRequest = getHttpRequest();
httpRequest.onreadystatechange = function () {
    if (httpRequest.readyState === 4) {
        document.getElementById("test").style.backgroundColor = "#00C900";
        document.getElementById("test").innerHTML = "Connecté à la BDD";
        getdata();
    }
    else {
        document.getElementById("test").style.backgroundColor = "#C90000";
        document.getElementById("test").innerHTML = "Erreur";
    }
}