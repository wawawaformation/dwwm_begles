/**
 * Un compteur avec les boutons :
 * - plus
 * - moins
 * -reset et l'affichage
 */



const displayElt=document.querySelector('#counter .display')
const moreElt = document.querySelector('button.more')
const lessElt = document.querySelector('button.less')
const resetElt = document.querySelector('.reset button')


/**
 * Permet d'ajouter ou de retirer 1
 * @param {number} nbre entier 
 * @param {string} direction more  ou less
 * @returns {number}
 */
const updateCounter = (nbre, direction)=>{
    if(direction === "more"){
        return ++nbre
    }else{
        return nbre > 0 ? --nbre : 0 
    }
}


/**
 * Met à jour l'affichage du compteur
 * @param {number} value 
 */
const render = (value)=>{
    displayElt.textContent = value
}



/*==================== Main ==================*/
let counter = 0
render(counter)



moreElt.addEventListener('click', function(){
    counter = updateCounter(counter, "more")
    render(counter)
})

lessElt.addEventListener('click', function(){
    counter = updateCounter(counter, "less")
    render(counter)
})

resetElt.addEventListener('click', function(){
    counter = 0
    render(counter)
})
