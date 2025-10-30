const couleurs = ["rouge", "vert", "bleu"];



const [couleur1, couleur2] = couleurs;

/*
//.log(couleur1); // "rouge"
//.log(couleur2); // "vert"
*/

const [a, , c = "aucune"] = ["x"];
//.log(a); // "x"
//.log(c); // "aucune"


//const produit = { nom: "Stylo", prix: 2.5, stock: 12 };
//const { nom, prix, stock } = produit;


//.log(nom); // "Stylo"
//.log(prix); // 2.5
//.log(stock); // 12

//const { nom: label, categorie = "inconnue" } = produit;
////.log(label); // "Stylo"
////.log(categorie); // "inconnue"


const fruits = ["pomme", "banane"];

const tousLesFruits = ["orange", ...fruits, "kiwi"];

const legumes = ["carotte", "courgette"];
const aliments = [...tousLesFruits, ...legumes];
////.log(aliments);

const [premier, ...autres] = aliments;
////.log(premier); // "orange"
////.log(autres); // ["pomme", "banane", "kiwi", "carotte", "courgette"]

const produit = { nom: "Lampe", prix: 19.99 };
const clone = { ...produit };

console.log(clone); // { nom: "Lampe", prix: 19.99 }


const promo = { prix: 14.99, remise: true };
const produitFinal = { ...produit, ...promo };
console.log(produitFinal); // { nom: "Lampe", prix: 14.99, remise: true }