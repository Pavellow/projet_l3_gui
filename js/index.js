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
        document.getElementById("test").innerHTML = httpRequest.responseText;
        getdata();
    }
    else {
        document.getElementById("test").style.backgroundColor = "#C90000";
        document.getElementById("test").innerHTML = httpRequest.responseText;
    }
}

httpRequest.open('GET', '..config/connect.php', true)
httpRequest.send();

function fetchData(data, cible) {
    for (const item of data) {
        var oe = document.getElementById("trTab");
        var taille = oe.childElementCount;
        var row = document.createElement("tr");
        for (let i = 0; i <= taille; i++) {
            console.log(taille);
            var cell = document.createElement("th");
            cell.textContent = item[i];
            row.appendChild(cell);
            document.getElementById(cible).appendChild(row);
        }
    }

}

function ajaxJquery(urlParam, cible) {
    $.ajax({
        url: urlParam, // URL de l'API qui renvoie les données de la table
        type: 'GET', // Type de requête HTTP (GET, POST, PUT, DELETE, etc.)
        dataType: 'json', // Type de données attendu dans la réponse
        success: function (dataParam) { // Fonction à exécuter en cas de succès
            fetchData(dataParam, cible);
        },
        error: function (xhr, status, error) { // Fonction à exécuter en cas d'erreur
            console.error(xhr.responseText); // Affiche le message d'erreur dans la console
        }
    });
}

function getdata() {
    ajaxJquery("./services/readeleves.php", "pour-vous-div");
}

