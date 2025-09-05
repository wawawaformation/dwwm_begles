/*@file menu.js*/
/*@description gestion du menu burger du site AFPA et son ouverture-fermeture sur les petits écrans_version mobile*/

/*selectionne l'élement du menu burger dans le DOM*/
/*@type {HTMLElement}*/

const burgerElt = document.getElementById("burger");

/*Sélection de la navigation principele (menu)*/
/*@type {HTMLElement}*/

const navElt = document.querySelector("nav");

/*écouteur d'événements sur le menu burger*/
/*@listens click*/

burgerElt.addEventListener("click", function () {
  if (navElt.classList.contains("hidden")) {
    navElt.classList.remove("hidden");
  } else {
    navElt.classList.add("hidden");
  }
});
