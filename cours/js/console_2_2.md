# La console 2/2
## Les activités
### Les conditions
#### if...else
```JS
if(/*un bolean*/){
    //suite d'instructions
}
```
Exemples de condition :
- (a == 12)
- (a === 12)
- (a !== 13)
- (a >= 12)
- (a <= 14>)
- (condition1 && condition2)
- (!condtion)
- (condition1 || condtion2)
- (fonction qui retourne un booléen)

A voir ensemble les tables de vérité et l'algèbre de bool

```JS
if(/*un bolean*/){
    //suite d'instructions
}else{
    //suite d'instructions
}
```

```JS
if(/*un bolean*/){
    //suite d'instructions
}else if(/*un bolean*/)
    //suite d'instructions
else{
    //suite d'instructions
}
```

#### Exercices
1. On demande l'age de m'utilisateur avec un prompt et lui dit qu'il peut : passer son permis, la conduite accompagné ou utiliser ses pieds
2. On demande si la personne est une fille et si elle est majeure . Si les deux cas sont exacts, on file un rencart

#### Le switch
```JS
switch(variable){
    case 'valeur1':
        //une suite d'instructions
        break;
    case 'valeur2':
        //une suite d'instructions
        break;
    case 'valeur3':
        //une suite d'instructions
        break;
    default:
        //une suite d'instructions

}
```

#### Exercices
Demande à l'utilisateur de saisir un nombre entre 1 et 7, puis affiche le jour correspondant grâce à une instruction switch.

- 1 → Lundi
- 2 → Mardi
- 3 → Mercredi
- 4 → Jeudi
- 5 → Vendredi
- 6 → Samedi
- 7 → Dimanche
- Si la valeur ne correspond à aucun jour, affiche : « Numéro invalide »


### Les boucles

#### La boucle for
```JS
for(let i=0; i<4; i++){
    console.log(i)
}
```

Exercice : 
- punition : le programme demande la ligne à copier, le nombre de lignes et fait la puntion à notre place
- parcourir les valeurs du tableau ['thomas1', 'axelle', 'esteban', 'adam', 'maryon'] 
- on modifie le tableau pour mettre les prénom en majuscule


#### La boucle while
```JS
let i = 10
while(i >= 0){
    //instruction
    i-- // on oublie pas sinon boucle infini
}
```

Exercice :
- Écris un programme qui fait un compte à rebours depuis 10 jusqu’à 0, et qui affiche à la fin :
"💥 BOUM ! C’est fini !"
- Revoir l'exercice punition

#### La boucle for ... of
```JS
const apprenants = ['thomas1', 'axelle', 'esteban', 'adam', 'maryon'] 

for (let apprenant of apprenants){
    console.log(apprenant.toUpperCase())
}
```

Exercice : 
- Dans le tableau ['thomas1', 'axelle', 'esteban', 'Adam', 'maryon'] , trouves les prenoms commencant par un a (on peut utiliser la methode startsWith)
- 

#### La boucle for ... in
```JS
const apprenant = {
    prenom: 'david',
    nom: 'legrand',
    age: 49
    boGosser = true
}

for (index in apprenant){
   console.log(index + " : " + apprenant[cle]);
}
```

Exercice :
Voici le tableau suivant
```JS
const animaux = [
    {
        prenom: 'Rex',
        espece: 'chien',
        race: 'berger allemand',
        age: 5,
        genre: 'mâle',
        vaccinAjour: true
    },
    {
        prenom: 'Mimine',
        espece: 'chat',
        race: 'chartreux',
        age: 3,
        genre: 'femelle',
        vaccinAjour: false
    },
    {
        prenom: 'Bubbles',
        espece: 'poisson',
        race: 'poisson rouge',
        age: 1,
        genre: 'mâle',
        vaccinAjour: false
    },
    {
        prenom: 'Canelle',
        espece: 'chien',
        race: 'cocker',
        age: 7,
        genre: 'femelle',
        vaccinAjour: true
    },
    {
        prenom: 'Grisette',
        espece: 'chat',
        race: 'européen',
        age: 2,
        genre: 'femelle',
        vaccinAjour: true
    }
];
```
- Parcourir chaque animal et afficher toutes ses informations clé:valeur.
-  Affiche uniquement les prénoms des animaux non vaccinés (vaccinAjour === false).
-  Compte combien d’animaux dans le tableau sont de l’espèce "chat". Affiche le résultat.


### Les fonctions
```JS
function double(nombre){
    return nombre*2
}

console.log(double(4)) // ecrit 8


/*=====================================*/

function addition(nombre1, nombre2){
    return nombre1 + nombre2
}

console.log(addition(4, 3)) // ecrit 7


/*=====================================*/

function crier(){
    console.log('AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAH');
}


/*====================================*/
//les closures
const maFonction = function(){

}


/*====================================*/
//les fonctions fléchées

const maFonction() = (a, b)=>{
    //instruction
}

const maFonction() = (a, b)=>c //c est ce qu'elle retourne

const maFonction() = a=>c //quand un seul parametre

```


#### Exercices
- Crée une fonction triple qui prend un nombre en paramètre et retourne ce nombre multiplié par 3.
- Crée une fonction calcul qui prend 3 paramètres : a, b, et operation.
    - Si operation vaut 'addition', retourne a + b.
    - Si operation vaut 'soustraction', retourne a - b.
    Affiche le résultat pour plusieurs appels.
- Crée une fonction crierTrèsFort() qui affiche :
JE SUIS EN FORMATION DÉVELOPPEUR WEB !!!
- 🔧 Réécris les fonctions suivantes en fonctions fléchées : function carre(x) {
  return x * x;
}
- Crée une fonction double puis affiche le double de chaque élément du tableau [1, 2, 3, 4, 5] avec une boucle for...of.


### map, filter et reduce
On apprend ensemble sur MDN