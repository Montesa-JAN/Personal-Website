const card = document.querySelector('.business-card');
const arrowButton = document.querySelector('.arrow-button');

arrowButton.addEventListener('click', function() {
    card.classList.toggle('flip')
});