// Sélection de tous les éléments avec la classe "accordion-item"
const accordionItems = document.querySelectorAll('.accordion-item');

// Parcours de tous les éléments de l'accordion
accordionItems.forEach(item => {
  // Sélection de l'en-tête et du contenu
  const header = item.querySelector('.accordion-header');
  const content = item.querySelector('.accordion-content');

  // Ajout d'un événement de clic sur l'en-tête
  header.addEventListener('click', () => {
    // Bascule de la classe "active" du contenu
    content.classList.toggle('active');

    // Si la classe "active" est présente
    if (content.classList.contains('active')) {
      // Affichage du contenu en mode "flex"
      content.style.display = 'flex';
    } else {
      // Sinon, le contenu est masqué
      content.style.display = 'none';
    }
  });
});
