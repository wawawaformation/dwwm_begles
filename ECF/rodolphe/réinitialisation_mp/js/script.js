/*réinitialisation du mot de passe*/

/*Déclaration des variables utilisées dans le script*/
const form = document.querySelector("form");
const mainpassword = document.getElementById("password");
const passWordConfirm = document.getElementById("password_confirm");
const viewPassword = document.getElementById("viewPassword");

/*critères à respecter du mot de passe*/
const critMinuscule =
  document.querySelector(".critere.minuscule"); /* avoir moins une minuscule */
const critMajuscule =
  document.querySelector(".critere.majuscule"); /* avoir moins une majuscule */
const critChiffre =
  document.querySelector(".critere.chiffre"); /* avoir moins un chiffre */
const critPlus8 =
  document.querySelector(".critere.plus8"); /* avoir au moins 8 caractères */

/*Vérification des mots de passe----------------------------------------------------------------*/

/* formulaire à compléter pour ECF*/

/* Vérifie si la chaine contient au moins une lettre minuscule et retourne true ou false */

function hasLowercase(text) {
  const Min = /[a-z]/;
  if (Min.test(text) === true) {
    return true;
  } else {
    return false;
  }
}

/* Vérifie si la chaine contient au moins une lettre majuscule et retourne true ou false */

function hasUppercase(text) {
  const Maj = /[A-Z]/;
  if (Maj.test(text) === true) {
    return true;
  } else {
    return false;
  }
}

/* Vérifie si le texte contient au moins un chiffre et retourne true ou false*/

function hasNumber(text) {
  const Number = /[0-9]/;
  if (Number.test(text) === true) {
    return true;
  } else {
    return false;
  }
}

/* Vérifie si la chaine a une longueur minimale et retourne true ou false*/

function hasMinLength(text, min) {
  let StrengthMini;
  if (typeof min === "number") {
    StrengthMini = min;
  } else {
    StrengthMini = 8;
  }

  if (text.length >= StrengthMini) {
    return true;
  } else {
    return false;
  }
}

/* Ajoute ou enlève la classe "checked" sur un élément en fonction de l'état isChecked */

/* petit badge des critères node voir (span) devient vert si true et reste vide en couleur si false */

function toogleClassChecked(node, isChecked) {
  if (isChecked === true) {
    node.classList.add("checked");
  } else {
    node.classList.remove("checked");
  }
}

/*
 suivant le retour de la valeur de hasLowercase, hasUppercase, hasNumber, hasMinLength, la fonction updateCriterias active la fonction toogleClassChecked pour la passere au vert*/

function ValuesTempsReel(valeur) {
  // 1. Minuscule
  const okMinuscule = hasLowercase(valeur);
  toogleClassChecked(critMinuscule, okMinuscule);

  // 2. Majuscule
  const okMajuscule = hasUppercase(valeur);
  toogleClassChecked(critMajuscule, okMajuscule);

  // 3. Chiffre
  const okChiffre = hasNumber(valeur);
  toogleClassChecked(critChiffre, okChiffre);

  // 4. Longueur >= 8
  const okLongueur = hasMinLength(valeur, 8);
  toogleClassChecked(critPlus8, okLongueur);
}

/* Vérifie que tout les critères sont ok, si un seul est false, tout est false */

function verifPassWord(valeur) {
  const ok1 = hasLowercase(valeur);
  const ok2 = hasUppercase(valeur);
  const ok3 = hasNumber(valeur);
  const ok4 = hasMinLength(valeur, 8);

  if (ok1 === true && ok2 === true && ok3 === true && ok4 === true) {
    return true;
  } else {
    return false;
  }
}

/* Les AddEventListener--------------------------------------------------------*/

/* Écoute des saisies dans le champ du mot de passe et mofication des critères */

/*on observe les evénements à chaque frappe dans le champ passeword et on renvoit les infos récupérée dans la cible mainpassword vers la fonction ValuesTempsReel*/

if (mainpassword) {
  mainpassword.addEventListener("input", function (event) {
    const valeurSaisie = event.target.value;
    ValuesTempsReel(valeurSaisie);
  });
}

/* Vérifier case cochée et afficher MP */

if (viewPassword) {
  /* Fonction Event on observe grace à event si la case est cochée dans l'input de type checkbox ciblé par viewpassword */
  viewPassword.addEventListener("change", function (event) {
    const coche = event.target.checked;

    /* suivant le retour true ou false on affiche le mot de passe */

    if (coche === true) {
      /*si true, mainpassword et passWordConfirm deviennent de type text et donc visible */

      if (mainpassword) {
        mainpassword.setAttribute("type", "text");
      }
      if (passWordConfirm) {
        passWordConfirm.setAttribute("type", "text");
      }
      /* sinon, false , deviennent de type password et donc invidible */
    } else {
      if (mainpassword) {
        mainpassword.setAttribute("type", "password");
      }
      if (passWordConfirm) {
        passWordConfirm.setAttribute("type", "password");
      }
    }
  });
}

/* Vérification du formulaire--------------------------------------------------------------*/

if (form) {
  /*on récupère les infos mot de passe*/
  form.addEventListener("submit", function (event) {
    event.preventDefault(); /* par défaut on envoi pas le formulaire le temps de tous vérifier (on diffère l'envoi) */

    let valeurPassword = "";
    let valeurConfirm = "";

    if (mainpassword) {
      valeurPassword = mainpassword.value;
    } else {
      valeurPassword = "";
    }

    if (passWordConfirm) {
      valeurConfirm = passWordConfirm.value;
    } else {
      valeurConfirm = "";
    }

    /* Vérifications si une valeur ne correspond pas à la norme, alert et return*/

    if (!/[a-z]/.test(valeurPassword)) {
      /* ! vrai si !non vrai (donc faux) */
      alert("Le mot de passe doit contenir au moins une lettre minuscule.");
      return;
    }
    if (!/[A-Z]/.test(valeurPassword)) {
      alert("Le mot de passe doit contenir au moins une lettre majuscule.");
      return;
    }
    if (!/[0-9]/.test(valeurPassword)) {
      alert("Le mot de passe doit contenir au moins un chiffre.");
      return;
    }
    if (valeurPassword.length < 8) {
      alert("Le mot de passe doit contenir au moins 8 caractères.");
      return;
    }
    if (valeurPassword !== valeurConfirm) {
      alert("Les deux mots de passe ne correspondent pas.");
      return;
    }

    /* si ok on envoie en activant form.submit()*/
    form.submit();
  });
}
