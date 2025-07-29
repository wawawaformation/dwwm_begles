# introduction au DOM

## Selectionner un/des noeud(s)
1. On découvre la console l'objet document (déroule l'objet)
1. on test document.body, document.head et document.title
1. Quelques méthodes et propriétés de sélection (on regarde la doc et on teste sur le fichier index):
    1. Méthodes
        - document.getElementById()
        - document.getElementsByClassName()
        - document.getElementsByTagName()
        - document.querySelector()
        - document.querySelectorAll()
        
    1. Propriétés
        - document.images
        - document.links
        - parentNode
        - parentElement
        - children
        - childNodes
        - firstElementChild
        - lastElementChild
        - previousElementSibling
        - nextElementSibling
        - previousSibling
        - nextSibling


## Modifier un noeud
1. Quelques méthodes

- setAttribute(name, value) → Modifie (ou crée) un attribut
    → element.setAttribute('class', 'nouvelle-classe')

- removeAttribute(name) → Supprime un attribut
    → element.removeAttribute('title')

- classList.add('ma-classe') → Ajoute une classe CSS

- classList.remove('ma-classe') → Supprime une classe CSS

- classList.toggle('ma-classe') → Ajoute ou retire selon l’état actuel

- appendChild(node) → Ajoute un enfant à la fin

- prepend(node) → Ajoute un enfant au début

- remove() → Supprime le nœud lui-même

- replaceWith(node) → Remplace un nœud par un autre

- insertBefore(newNode, referenceNode) → Insère un nœud avant un autre (ancien mais encore utile)

- insertAdjacentHTML(position, html) → Injecte du HTML à un endroit précis (beforebegin, afterbegin, beforeend, afterend)

1. Quelques propriétés

- textContent → Modifie le texte brut
    → element.textContent = 'Hello DOM !'

- innerText → Modifie le texte visible (attention : dépend du CSS)

- innerHTML → Modifie ou récupère le HTML à l’intérieur
    → element.innerHTML = '<strong>Important</strong>'
 
- outerHTML → Remplace l’élément entier avec du HTML

- value → Pour les champs de formulaire (input, textarea)
    → input.value = 'Bonjour'

- src, href, alt, title, etc. → Pour manipuler des attributs directement
    → img.src = 'nouvelle-image.jpg'

1. Pour quelques méthodes et propriétés utiles de plus
- getAttribute('name')
- hasAttribute('name')
- element.classList.contains('ma-classe')
- element.style.propriété = 'valeur' (ex de propriété : backgroundColor)
- createElement('balise html') 

## Exercice

### Objectif

S’entraîner à sélectionner et modifier des éléments HTML en JavaScript à l’aide des méthodes et propriétés du DOM vues en cours.


#### Sélections de base

- Sélectionne le titre principal (<h1 id="titre-principal">) et stocke-le dans une variable titreElt.

- Sélectionne tous les liens de navigation (classe nav-link) avec querySelectorAll() et stocke-les dans une variable liensElts.

- Sélectionne la section avec l’id section1 avec getElementById() -> section1Elt.

- Sélectionne la première image de la page avec getElementsByTagName() -> firstImageElt.

#### Modifications simples

- Change le texte du titre principal en :
    "Bienvenue dans le merveilleux monde du DOM !".
- Modifie l’attribut alt de l’image avec :
    "Illustration de la manipulation DOM".

- Ajoute la classe "highlight" au deuxième élément de la liste dans la section 2.

- Supprime l’attribut title du bouton ayant l’id action-btn.

#### Création et insertion de nœuds

- Crée un nouvel élément <p> avec document.createElement('p').
- Ajoute-y le texte "Ce paragraphe a été ajouté dynamiquement" avec textContent, puis ajoute-le à la fin de la section 1 avec appendChild.

- Clone ce paragraphe avec cloneNode(true) et insère la copie juste avant le bouton #action-btn.

- Utilise insertAdjacentHTML() pour ajouter une ligne horizontale <hr> juste après le <h2> de la section 2.

- Remplace toute la liste (<ul>) de la section 2 par un paragraphe contenant :
    "La liste a été supprimée."
    (utilise replaceWith() avec un élément créé dynamiquement).

#### Bonus (facultatif mais recommandé)

- Vérifie si l’image contient un attribut src. Si oui, remplace sa source par :
    "https://via.placeholder.com/300".

- Change la couleur de fond du <footer> en gris clair (#eee) via la propriété .style.

- Vérifie si le bouton #action-btn contient la classe "important".
    S’il ne l’a pas, ajoute-la dynamiquement.

