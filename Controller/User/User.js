class Utilisateur {
    constructor(username_param, mdp_param) {
        this.username = username_param;
        this.mdp = mdp_param;
    }

    connect() {
        var xhr = new XMLHttpRequest();
        var data = new FormData();
        var method = "POST";
        var url = "http://127.0.0.1/IHM/Controller/User/php/connect_account.php";

        data.append('mail', this.username);
        data.append('motdepasse', this.mdp);

        xhr.onload = function() {
            if(xhr.status === 200) {
                window.location = "http://127.0.0.1/IHM/index.php";
            }
            else {
                console.log(xhr.response);
            }
        }

        xhr.open(method, url);
        xhr.send(data);        
    }

    disconnect() {
        var xhr = new XMLHttpRequest();
        var data = new FormData();
        var method = "POST";
        var url = "http://127.0.0.1/IHM/Controller/User/php/disconnect_account.php";

        data.append('mail', this.username);
        data.append('motdepasse', this.mdp);

        xhr.onload = function() {
            if(xhr.status === 200) {
                window.location = "http://127.0.0.1/IHM/index.php";
            }
            else {
                console.log(xhr.response);
            }
        }

        xhr.open(method, url);
        xhr.send(data);   
    }
}