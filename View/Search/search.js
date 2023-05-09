const accordionItems = document.querySelectorAll('.accordion-item');
const form = document.querySelector("form");
const checkboxes = document.querySelectorAll("input[type='checkbox']")
var checkedCheckboxes = [];

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



form.addEventListener("submit", function(event) {
    event.preventDefault();
    checkboxes.forEach(checkbox => {
        if(checkbox.checked) {
            checkedCheckboxes.push(checkbox.value);
            
        }
        
    });
    var search = new Search();
    search.result = checkedCheckboxes;

    search.send_result();
    checkedCheckboxes = [];
    
    

})