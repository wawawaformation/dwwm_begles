/** Élement form du DOM */
const form = document.querySelector("form");

/** Élement input du mot de passe */
const passwordElt = document.getElementById("password");

/** Élement input de la confirmation du mot de passe */
const passwordConfElt = document.getElementById("password_confirm");

/** Élement checkbox pour afficher le mot de passe */
const passwordViewElt = document.getElementById("viewPassword");

/** Élement li pour le critère de minuscule */
const minCritElt = document.querySelector(".minuscule");

/** Élement li pour le critère de majuscule */
const majCritElt = document.querySelector(".majuscule")
;
/** Élement li pour le critère de chiffre */
const nbCritElt = document.querySelector(".chiffre");

/** Élement li pour le critère de la taille du mot de passe */
const lenghtCritElt = document.querySelector(".plus8");



/**
 * Vérifie si la chaîne contient au moins une lettre minuscule et retourne true ou false en conséquence
 * @param {String} str Chaîne à vérifier
 * @returns true si la chaîne contient au moins une minuscule, sinon false
 */
const hasLowercase = (str) => {
  return /[a-z]/.test(str);
};


/**
 * Vérifie si la chaîne contient au moins une lettre majuscule et retourne true ou false en conséquence
 * @param {String} str Chaîne à vérifier
 * @returns true si la chaîne contient au moins une majuscule, sinon false
 */
const hasUppercase = (str) => {
  return /[A-Z]/.test(str);
};

/**
 * Vérifie si la chaîne contient au moins un chiffre et retourne true ou false en conséquence
 * @param {String} str Chaîne à vérifier
 * @returns true si la chaîne contient au moins un nombre, sinon false
 */
const hasNumber = (str) => {
  return /\d/.test(str);
};


/**
 * Verifie si la chaîne a une longueur minimale et retourne true ou false en conséquence
 * @param {String} str Chaîne à vérifier
 * @param {Number} length Taille minimale que la chaîne doit vérifier
 * @returns true si les deux valeurs sont égales, sinon false
 */
const hasMinLength = (str, length) => {
  return str.length >= length;
};


/**
 * Ajoute ou supprime la classe 'checked' sur un élément en fonction de l'état isChecked
 * @param {Element} node Noeud du DOM sur lequel appliquer la fonction
 * @param {Boolean} isChecked true si la condition a été validé, sinon false
 */
const toggleClassChecked = (node, isChecked ) => {
  if (isChecked) {
    node.classList.add("checked");
  } else {
    node.classList.remove("checked");
  }
  
}


/**
 * Écoute des saisies dans le champ du mot de passe et attribue la class "checked"
 * si un critère est validé
 */
passwordElt.addEventListener('input', (e) => {
  const value = passwordElt.value;
  toggleClassChecked(minCritElt, hasLowercase(value));
  toggleClassChecked(majCritElt, hasUppercase(value));
  toggleClassChecked(nbCritElt, hasNumber(value));
  toggleClassChecked(lenghtCritElt, hasMinLength(value, 8));
});


/**
 * Écoute de la soumission du formulaire, et bloque l'envoie si un critère n'est pas
 * validé ou si les mots de passe sont différents
 */
form.addEventListener('submit', (e) => {
  if (!minCritElt.classList.contains("checked")) {
    e.preventDefault();
    alert("Le mot de passe doit contenir au moins une minuscule");
  }
  if (!majCritElt.classList.contains("checked")) {
    e.preventDefault();
    alert("Le mot de passe doit contenir au moins une majuscule");
  }
  if (!nbCritElt.classList.contains("checked")) {
    e.preventDefault();
    alert("Le mot de passe doit contenir au moins un chiffre");
  }
  if(!lenghtCritElt.classList.contains("checked")) {
    e.preventDefault();
    alert("Le mot de passe doit avoir au moins 8 caractères");
  }
  if(passwordElt.value != passwordConfElt.value) {
    e.preventDefault();
    alert("Les mots de passe doivent être identiques")
  }
});

/**
 * Écoute de la checkbox d'affichage de mot de passe
 * Affiche le mot de passe si la checkbox est coché, sinon le cache
 */
passwordViewElt.addEventListener('change', (e) => {
  if(passwordViewElt.checked) {
    passwordElt.type = "text";
  } else {
    passwordElt.type = "password";
  }
})



