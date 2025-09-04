// --- Récupération des éléments du DOM ---
const passwordElt = document.getElementById("password");
const lowerCaseElt = document.querySelector(".minuscule");
const upperCaseElt = document.querySelector(".majuscule");
const numberElt = document.querySelector(".chiffre");
const eightMoreElt = document.querySelector(".plus8");
const form = document.querySelector("form");
const confirmPasswordElt = document.getElementById('password_confirm');
const showPasswordElt = document.getElementById('viewPassword');



 //Vérifie si la chaîne contient au moins une lettre minuscule et retourne true ou false
/**
 * 
 * @param {String} str Chaine à verifier
 * @returns True s'il y a au moins une miniscule, sinon false
 */
const hasLowercase = (str) => {
    return /[a-z]/.test(str);
};


/**
 * Vérifie si la chaîne contient au moins une lettre majuscule et retourne true ou false
 * @param {String} str Chaine à verifier
 * @returns True s'il y a au moins une majuscule, sinon false
 */

const hasUppercase = (str) => {
   return /[A-Z]/.test(str);
};


/**
 * Vérifie si la chaîne contient au moins un chiffre et retourne true ou false
 * @param {String} str Chaine à verifier
 * @returns True s'il y a au moins une chiffre, sinon false
 */
const hasNumber = (str) => {
    return /[0-9]/.test(str);
};


/**
 * Verifie si la chaîne a une longueur minimale
 * @param {String} str Chaine à verifier
 * @param {Number} length entier positif, longueur minimale attendue
 * @returns True si la taille de la chaine est égale ou supérieur à lenght , sinon false
 */
const hasMinLength = (str, length) => {
    return str.length >= length;
};


/**
 * Ajoute ou supprime la classe 'checked' sur un élément en fonction de l'état isChecked
 * @param {Element} node élement HTML sur lequel on ajoute ou retire la classe
 * @param {Boolean} isChecked valeur de vérification, vaut true ou false
 */
const toggleClassChecked = (node, isChecked ) => {
  if(isChecked == true ) {
    node.classList.add("checked");
  } else {
    node.classList.remove("checked")
  }
}
 

// Écoute des saisies dans le champ du mot de passe et mofication des critères
passwordElt.addEventListener('input', (e) => {
  const value = passwordElt.value;
  toggleClassChecked(lowerCaseElt, hasLowercase(value));
  toggleClassChecked(upperCaseElt, hasUppercase(value));
  toggleClassChecked(numberElt, hasNumber(value));
  toggleClassChecked(eightMoreElt, hasMinLength(value, 8));
});

/** 
*Écoute de la soumission du formulaire, et bloque l'envoi si les critères ne sont pas remplis
* ou si les mots de passe ne sont pas identiques
*/
form.addEventListener('submit', (e) => {
  e.preventDefault();

  if (
    !lowerCaseElt.classList.contains("checked") ||
    !upperCaseElt.classList.contains("checked") ||
    !numberElt.classList.contains("checked") ||
    !eightMoreElt.classList.contains("checked") ||
    (passwordElt.value !== confirmPasswordElt.value)
  ) {
    alert("Le formulaire n'est pas correctement rempli");
  } else {
    alert("Envoi du formulaire");
  }
});

// Affiche ou masque le mot de passe
showPasswordElt.addEventListener('change', function () {
    const type = this.checked ? 'text' : 'password';
    passwordElt.setAttribute('type', type);
    confirmPasswordElt.setAttribute('type', type);
});



