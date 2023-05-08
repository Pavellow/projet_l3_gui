const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    const content = item.querySelector('.accordion-content');

    header.addEventListener('click', () => {
        content.classList.toggle('active');

        if (content.classList.contains('active')) {
            content.style.display = 'flex';
        } else {
            content.style.display = 'none';
        }
    });
});