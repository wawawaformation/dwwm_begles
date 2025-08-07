/**
 * Vérification des conditions (Length, UpperCase et Number) des caractères du mot de passe, avant la validation et envoi du formulaire
 * Utilisation de regex pour la vérification
 * Modification du bouton submit à la validation des conditions
 */

const regex = /^(?=.*[A-Z])(?=.*\d).{12,}$/;
const passwordInput = document.getElementById("password");
const spanLength = document.getElementById("length");
const spanUpperCase = document.getElementById("upper_case");
const spanNumber = document.getElementById("number");
const btnSubmit = document.getElementById("btn-submit");

passwordInput.addEventListener("input", () => {
    const value = passwordInput.value;
    const conditionLength = value.length >= 12;
    const conditionUpperCase = /[A-Z]/.test(value);
    const conditionNumber = /\d/.test(value);

    conditionChecked(spanLength, conditionLength);
    conditionChecked(spanUpperCase, conditionUpperCase);
    conditionChecked(spanNumber, conditionNumber);

    if (conditionLength && conditionUpperCase && conditionNumber) {
        btnSubmit.disabled = false;
    } else {
        btnSubmit.disabled = true;
    }
});

/**
 * Modification couleurs des critères du mot de passe selon conditions respectées ou non
 */

function conditionChecked(element, condition) {
    if (condition) {
        element.classList.remove("text-danger");
        element.classList.add("text-success");
    } else {
        element.classList.remove("text-success");
        element.classList.add("text-danger");
    }
}

/**
 * Vérification de la correspondance des mots de passe avant envoi du formulaire
 */

document.querySelector('form').addEventListener('submit', function (e) {
    e.preventDefault();

    const password = e.target.password.value;
    const confirmPassword = e.target.confirm_password.value;
    const confirmLabelElt = document.querySelector('[for="confirm_password"]');

    confirmLabelElt.textContent = "Confirmer le mot de passe";
    confirmLabelElt.style.color = "";

    if (password === confirmPassword) {
        alert("Modification validée !");
    } else {
        confirmLabelElt.textContent = " /!\\ Les mots de passe ne sont pas identiques";
        confirmLabelElt.style.color = "red";
    }
});
