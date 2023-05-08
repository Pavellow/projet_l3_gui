class User {
    constructor(username, mdp) {
        this.username = username;
        this.mdp = mdp;
    }

    connect() {
        var xhr = new XMLHttpRequest();
        var data = new FormData();
        var method = "POST";
        var url = "../Controller/User/php/connect_account.php";

        data.append('mail', this.username);
        data.append('motdepasse', this.mdp);

        xhr.onload = function() {
            if(xhr.statux === 200) {
                console.log("test");
            }
        }

        xhr.open(method, url);
        xhr.send()

        
    }
}