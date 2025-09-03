const burgerElt = document.getElementById('menu-burger');
const menuElt = document.getElementById('menu');
const arianeElt = document.getElementById('fil-arianne');
const apprenantsElt = document.getElementById('bloc-apprenants')

burgerElt.addEventListener('click', () => {
  menuElt.classList.toggle('active');
  arianeElt.classList.toggle('none');
  apprenantsElt.classList.toggle('none');

});