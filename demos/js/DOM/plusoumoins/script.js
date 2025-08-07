
/**
 * Retourne un entier aléatoire
 * @param {Number} min
 * @param {Number} max 
 * @returns Entier entre min et max
 */
const genererNombreAleatoire = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
};



/**
 * Affiche le message de fin
 * @param {Number} nombre 
 */
const bravo = (nombre)=>{
    document.body.innerHTML = ""
    alert(`Vous avez gagné avec le nombre ${nombre}  !!` )

    // on fera mieux ... un jour
}


const formElt = document.querySelector("form");
const messageElt = document.getElementById("message");
const historiqueListElt = document.getElementById("historique-list");
const nombreAleatoire = genererNombreAleatoire(1, 100);

console.log(nombreAleatoire)


formElt.addEventListener("submit", function (event) {
    event.preventDefault();
    const saisie = parseInt(formElt.elements["nombre"].value);
    let msg = ""
    if (saisie === nombreAleatoire) {
        bravo(nombreAleatoire)
       
    } else if (saisie < nombreAleatoire) {
        msg = "C'est plus !";
        messageElt.textContent = msg;
        messageElt.style.color = "blue"
    
      
    } else {
         msg = "C'est moins !";
        messageElt.textContent = msg;
        messageElt.style.color = "red"
    
    }


    const historiqueItem = document.createElement("li");
    historiqueItem.textContent = saisie + " -> " + msg;
    historiqueListElt.prepend(historiqueItem);
});