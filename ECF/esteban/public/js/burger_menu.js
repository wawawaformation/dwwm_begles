/**
 * Animation du menu burger
 */
const burgerElt = document.querySelector(".burger-button");
const mainMenuElt = document.getElementById("nav")

burgerElt.addEventListener("click", function () {
    mainMenuElt.classList.toggle("hidden");
});