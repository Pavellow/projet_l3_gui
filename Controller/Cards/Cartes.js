class Carte {
    constructor(id, modèle, image) {
        this.id = id;
        this.modèle = modèle;
        this.image = image;
    }

    static initCards(card, index) {
        var newCards = document.querySelectorAll('.tinder--card:not(.removed)');

        newCards.forEach(function (card, index) {
            card.style.zIndex = allCards.length - index;
            card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
            card.style.opacity = (10 - index) / 10;
        });

        tinderContainer.classList.add('loaded');
    }

    static like(id_chaussure, likedislike) {
        var xhr = new XMLHttpRequest();
        var formdata = new FormData();

        xhr.onload = function() {
            console.log(xhr.response);
        }

        formdata.append("id_chaussure", id_chaussure);
        formdata.append("likedislike", likedislike)

        xhr.open("POST", "../Controller/Cards/php/like.php");
        xhr.send(formdata);
    }    

    readAll() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', "../Controller/Cards/php/get_all.php");

        xhr.onload = function () {
            var json = JSON.parse(xhr.response);
            console.log(json);
            json.forEach(function (element) {
                var container_cards = document.querySelector(".tinder--cards");
                var container_card = document.createElement('div');
                container_card.setAttribute('class', 'tinder--card');

                var img = document.createElement('img');
                img.setAttribute('src', element.image);
                container_card.appendChild(img);

                var h3 = document.createElement('h3');
                h3.innerText = element.modèle;
                container_card.appendChild(h3);

                /* var p = document.createElement('p');
                p.innerText = "libelle";
                container_card.appendChild(p); */

                Carte.initCards();

                // Initialiser Hammer.js sur la carte nouvellement créée
                var hammerInstance = new Hammer(container_card);

                var red = Math.floor(Math.random() * 256);
                var green = Math.floor(Math.random() * 256);
                var blue = Math.floor(Math.random() * 256);

                // Concaténer les valeurs de chaque composante de couleur dans une chaîne au format "rgb(r, g, b)"
                var color = "rgb(" + red + ", " + green + ", " + blue + ")";

                // Appliquer la couleur à un élément HTML
                if ((red + green + blue) / 3 >= (256 * 0.67)) {
                    container_card.style.color = "var(--noir)";
                }

                hammerInstance.on('pan', function (event) { // EventListener de Hammer.js
                    container_card.classList.add('moving');
                });

                container_card.style.backgroundColor = color;

                hammerInstance.on('pan', function (event) { // EventListener de Hammer.js
                    if (event.deltaX === 0) return;
                    if (event.center.x === 0 && event.center.y === 0) return;


                    tinderContainer.classList.toggle('tinder_love', event.deltaX > 0);
                    tinderContainer.classList.toggle('tinder_nope', event.deltaX < 0);

                    var xMulti = event.deltaX * 0.03;
                    var yMulti = event.deltaY / 80;
                    var rotate = xMulti * yMulti;



                    event.target.style.transform = 'translate(' + event.deltaX + 'px, ' + event.deltaY + 'px) rotate(' + rotate + 'deg)';
                });

                hammerInstance.on('panend', function (event) { // EventListener de Hammer.js
                    container_card.classList.remove('moving');
                    tinderContainer.classList.remove('tinder_love');
                    tinderContainer.classList.remove('tinder_nope');

                    var moveOutWidth = document.body.clientWidth;
                    var keep = Math.abs(event.deltaX) < 80 || Math.abs(event.velocityX) < 0.5;

                    event.target.classList.toggle('removed', !keep);

                    if (keep) { // Si l'utilisateur lache la carte sans l'avoir liké ou disliké
                        event.target.style.transform = ''; // On la remet à sa place initiale

                    } else {
                        var endX = Math.max(Math.abs(event.velocityX) * moveOutWidth, moveOutWidth);
                        var toX = event.deltaX > 0 ? endX : -endX;
                        var endY = Math.abs(event.velocityY) * moveOutWidth;
                        var toY = event.deltaY > 0 ? endY : -endY;
                        var xMulti = event.deltaX * 0.03;
                        var yMulti = event.deltaY / 80;
                        var rotate = xMulti * yMulti;

                        if (toX > 0) { // Si l'utilisateur a liké on fait :
                            console.log("bon choix :)");
                        }
                        else { // Sinon on fait :
                            console.log("dommage :(");
                        }

                        event.target.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
                        Carte.initCards();

                    }
                });


                hammerInstance.on('swipeleft', () => {
                    // console.log('Balayage vers la gauche détecté sur la carte ' + element.modèle);
                    Carte.like(element.id_chaussure, 0);
                });
                hammerInstance.on('swiperight', () => {
                    // console.log('Balayage vers la droite détecté sur la carte ' + element.modèle);
                    Carte.like(element.id_chaussure, 1);
                });

                container_cards.appendChild(container_card);
            });
        };

        xhr.send();
    }
}
