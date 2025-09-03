/** Animation du menu burger */

const burger = document.getElementById('burger');
const menuNav = document.getElementById('main-menu');

burger.addEventListener('click', () => {
  const isOpen = menuNav.classList.toggle('open');
  burger.setAttribute('aria-expanded', isOpen);

});