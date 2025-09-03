const burgerButton = document.querySelector('.button-burger');
const nav = document.querySelector('.nav');

burgerButton.addEventListener('click', () => {
    nav.classList.toggle('active');
});