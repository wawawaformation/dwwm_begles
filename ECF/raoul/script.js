/**
 * Activation au click du menu burger
 */

const burger = document.getElementById("burger");
const nav = document.getElementById("firstnav");
const ariane = document.getElementById("ariane-thread");
const chapo = document.getElementById("chapo");

burger.addEventListener("click", () => {
    nav.classList.toggle("lightbutton");
    ariane.classList.toggle("lightbutton");
    chapo.classList.toggle("lightbutton");
});