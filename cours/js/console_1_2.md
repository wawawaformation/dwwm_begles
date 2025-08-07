# La console 1.2
## OPO
- Expliquer ce qu’est la programmation et différencier langage compilé et interprété
- Déclarer et utiliser des variables
- Manipuler des tableaux et des objets
- Écrire et appeler des fonctions simples
- Utiliser les structures de contrôle
- Tester du code dans la console du navigateur
- Intégrer du code JavaScript dans une page HTML

## Les activités
### La console
1. On ouvre la console du navigateur :
    - Raccouci clavier F12
    - Clic droit une page web > Inspecter > Onget console

1. On ecti directement dans la console :
```JS
console.log("Ceci est un est un test")
console.error("Ceci est un message d'erreur")
``` 

3. À quoi sert la console ?

---
### Ajouter du javascript au HTML
- Dans le header ou à la fin du body

```HTML
...
    <script>
        // commentaire sur une ligne
    </script>
</header>
<body>
    ....
    ...
     <script>
        /*
            Commentaire sur plusieurs 
            lignes
        */
    </script>
</body>
```
- Dans un fichier externe

```HTML
<script src="js/script.js"></script>
```

```JS
/**
 * Un peu de doc à propos du fichier
 */
 alert("lance une boite d'alert")
 ```

 - Question : quelles conséquences quand on place son JS dans le head ou à la fin du body ?
 ---
### Les variables
#### Déclarer une variable et lui attribuer une valeur
    - let
    - const
    - jamais var

```JS
let prenom = "alice"
let age = 33.5
const tempGlace = 0 //on remarque le camelCase

console.log(prenom)
console.log(age)
console.log(tempGlace)

age = 44
console.log(age)

tempGlace = -2 //une erreur est lancée
```

#### Les types primitifs
    - string
    - number
    - boolean
```JS
let prenom = "alice"
let age = 33.5


console.log("la variable prenom est de type " + typeof(prenom))
console.log("la variable age est de type " + typeof(age))

console.log(typeof(33 == 33))
console.log(1 == 1)
console.log("10" == 10)
console.log("10" === 10)

```

#### Les opérations 
```JS
console.log(7 + 3)
console.log(7 - 3)
console.log(7 * 3)
console.log(7 / 3)
console.log(7 % 3)
console.log(7 ** 3)


// incrementation
let i = 3
i = i + 1
console.log(i)
i += 1
console.log(i)
i++
console.log(i)
console.log(i++)
console.log(i)
console.log(++i)


// La concatenation
let prenom = "alice"
let age = "40"

console.log(prenom + " a " + age + " ans ")
console.log(`${prenom} a ${age} ans !`)

```


#### Les types composés

```JS
const couleurs = ["rouge", "jaune", "bleu"]; //une liste
console.log(couleurs)
console.log(couleurs[0])


const presonne = {
    prenom: "Alice",
    age: 36,
    sympa: false
}
console.log(personne)
console.log(personne.nom)


const personnes = {
    liste: [
        {
            prenom: "Alice",
            age: 30,
            sympa: true
        },
        {
            prenom: "Bob",
            age: 42,
            sympa: false
        }
    ]
}

console.log(personnes)
console.log(personnes.liste[0])
console.log(personnes.liste[1].prenom)

```
---
### Les fonctions natives
Une fonction native (ou intégrée) est une fonction déjà fournie par le langage JavaScript. Elle peut être utilisée sans qu’on ait besoin de la définir soi-même.

#### Quelques fonctions globales
```JS
alert("Bonjour !")       // Boîte d’alerte (à éviter sauf pour démonstration)
prompt("Quel est ton prénom ?") // Demande une saisie à l'utilisateur
confirm("Es-tu sûr ?")   // Affiche une boîte de confirmation

parseInt("42")           // Convertit en entier => 42
parseFloat("3.14")       // Convertit en flottant => 3.14
isNaN("abc")             // true (car ce n’est pas un nombre)
```


#### Quelques fonctions liées aux chaines de caractères
```JS
let phrase = "Bonjour le monde"

console.log(phrase.length)           // Longueur => 17
console.log(phrase.toUpperCase())   // => "BONJOUR LE MONDE"
console.log(phrase.toLowerCase())   // => "bonjour le monde"
console.log(phrase.includes("monde")) // => true
console.log(phrase.indexOf("le"))     // => 8
console.log(phrase.slice(0, 7))       // => "Bonjour"
```

#### Quelques fonctions liées aux listes (tableaux)
```JS
let fruits = ["pomme", "banane", "fraise"]

console.log(fruits.length)        // => 3
console.log(fruits.join(", "))   // => "pomme, banane, fraise"
fruits.push("kiwi")              // ajoute un élément à la fin
console.log(fruits)
fruits.pop()                     // retire le dernier
console.log(fruits)

console.log(fruits.includes("banane")) // => true

// voir shift et unshift
```


#### Quelques fonctions liées aux objets
```JS
// Déclaration d'un objet
const alice = {
    prenom: "Alice",
    age: 30,
    ville: "Paris",
    sympa: true
}

// Voir les clés de l'objet
console.log(Object.keys(alice)) 
// ➜ ["prenom", "age", "ville", "sympa"]

// Voir les valeurs de l'objet
console.log(Object.values(alice)) 
// ➜ ["Alice", 30, "Paris", true]


// Vérifier si une propriété existe
console.log(alice.hasOwnProperty("age")) 
// ➜ true
console.log(alice.hasOwnProperty("nom")) 
// ➜ false


```


#### Quelques méthodes de l'objet Math
```JS
console.log(Math.round(3.6))   // Arrondi à 4
console.log(Math.floor(3.6))   // Plancher => 3
console.log(Math.ceil(3.1))    // Plafond => 4
console.log(Math.random())     // Nombre aléatoire entre 0 et 1
console.log(Math.max(4, 9, 2)) // Le plus grand => 9
console.log(Math.min(4, 9, 2)) // Le plus petit => 2
```