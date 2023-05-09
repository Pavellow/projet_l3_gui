'use strict'; // On force le navigateur a exécuter le code tel quel
var tinderContainer = document.querySelector('.tinder');
var allCards = document.querySelectorAll('.tinder--card');



var container_cards = document.querySelector(".tinder--cards");

var cardGetter = new Carte();
cardGetter.readAll();

function initCards(card, index) {
  var newCards = document.querySelectorAll('.tinder--card:not(.removed)');

  newCards.forEach(function (card, index) {
    card.style.zIndex = allCards.length - index;
    card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
    card.style.opacity = (10 - index) / 10;
  });

  tinderContainer.classList.add('loaded');
}

initCards();

allCards.forEach(function (el) {
  var hammertime = new Hammer(el);

  // Ici on gère les fonctionnalités des cartes :
  // Là on gère la couleur de la police selon la couleur de fond

  var red = Math.floor(Math.random() * 256);
  var green = Math.floor(Math.random() * 256);
  var blue = Math.floor(Math.random() * 256);

  // Concaténer les valeurs de chaque composante de couleur dans une chaîne au format "rgb(r, g, b)"
  var color = "rgb(" + red + ", " + green + ", " + blue + ")";

  // Appliquer la couleur à un élément HTML
  if ((red + green + blue) / 3 >= (256 * 0.67)) {
    el.style.color = "var(--noir)";
  }
  el.style.backgroundColor = color;

  // Si on arrive à la fin du deck, donc à la carte limite, on fait rien

  if (el.classList.contains("limited")) {
    return;
  }

  // A la sélection de la carte, on ajoute la classe moving

  hammertime.on('pan', function (event) { // EventListener de Hammer.js
    el.classList.add('moving');
  });

  hammertime.on('pan', function (event) { // EventListener de Hammer.js
    if (event.deltaX === 0) return;
    if (event.center.x === 0 && event.center.y === 0) return;


    tinderContainer.classList.toggle('tinder_love', event.deltaX > 0);
    tinderContainer.classList.toggle('tinder_nope', event.deltaX < 0);

    var xMulti = event.deltaX * 0.03;
    var yMulti = event.deltaY / 80;
    var rotate = xMulti * yMulti;



    event.target.style.transform = 'translate(' + event.deltaX + 'px, ' + event.deltaY + 'px) rotate(' + rotate + 'deg)';
  });

  hammertime.on('panend', function (event) { // EventListener de Hammer.js
    el.classList.remove('moving');
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


      event.target.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
      
      initCards();
    }
  });
});