# Introduction aux événements dans le DOM

## Comprendre les événements
1. Qu’est-ce qu’un événement dans le navigateur ?
    - Une interaction utilisateur (clic, survol, frappe clavier, chargement…)
    - Une réaction du navigateur (erreur, chargement d’image…)

2. Types d’événements courants :
    - click
    - mouseover / mouseout
    - submit
    - keydown / keyup
    - change / input
    - load
    - scroll

3. La fonction `addEventListener()` :
    - Permet d’attacher une fonction à un événement
    - Syntaxe : `element.addEventListener('evenement', fonction)`

---

## Attacher un événement à un élément
1. Exemple simple :

```js
const bouton = document.getElementById('action-btn');
bouton.addEventListener('click', () => {
  alert("Tu as cliqué !");
});

function direBonjour() {
  console.log("Bonjour !");
}

document.querySelector('h1').addEventListener('click', direBonjour);
```


## L'objet event

L’événement passé automatiquement à la fonction

Propriétés utiles :

- event.target → l’élément qui a déclenché l’événement

- event.preventDefault() → empêche le comportement par défaut (formulaire, lien…)


## Quelques cas pratiques


- Changer le style d’un élément au survol (mouseover)

- Afficher une alerte lors d’un clic sur un bouton

- Récupérer la valeur d’un champ en input

- Intercepter la soumission d’un formulaire

- Ajouter ou retirer une classe sur clic


## À tester dans le fichier index.html :

- Clic sur le bouton

- Survol du titre

- Interaction avec un champ de formulaire à ajouter (input type="text")

- Clic sur un lien : empêcher la navigation avec event.preventDefault()

- Ajout d'une classe "clique" au clic sur un élément de liste