class Search {
    constructor(result) {
        this.result = result;
    }

    send_result() {
        var xhr = new XMLHttpRequest();
        var formdata = new FormData();

        var json = JSON.stringify(this.result);

        formdata.append('tags', json);

        xhr.onload = function() {
            console.log(xhr.response);
        }

        xhr.open("POST", "../Controller/Back/reco.php");
        xhr.send(formdata);
    }
}