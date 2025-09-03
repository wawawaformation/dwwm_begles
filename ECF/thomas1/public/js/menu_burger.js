/** Animation du menu burger 
 * si le menu est caché on l'affiche
 * si le menu est affiché on le cache
*/
const burgerElt = document.getElementById("burger");
const navElt = document.querySelector("#header nav");

burgerElt.addEventListener("click", function(){
    if (navElt.classList.contains("hidden")){
        navElt.classList.remove("hidden")

    } else {
        navElt.classList.add("hidden")
    }
})
 