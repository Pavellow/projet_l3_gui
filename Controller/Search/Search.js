class Search {
    constructor(result) {
        this.result = result;
    }

    send_result() {
        var xhr = new XMLHttpRequest();
        var formdata = new FormData();

        xhr.onload() = function() {
            window.location = "http://127.0.0.1/IHM/View/cartes.php";
        }

        xhr.open("POST", "../Controller/User/php/send_result.php");
        xhr.send(formdata);
    }
}