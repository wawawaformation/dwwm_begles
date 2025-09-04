/**
 * @param {string} str
 * @returns {boolean}
 */
const hasLowercase = (str) => /[a-z]/.test(str);

/**
 * @param {string} str
 * @returns {boolean}
 */
const hasUppercase = (str) => /[A-Z]/.test(str);

/**
 * @param {string} str
 * @returns {boolean}
 */
const hasNumber = (str) => /\d/.test(str);

/**
 * @param {string} str
 * @param {number} length
 * @returns {boolean}
 */
const hasMinLength = (str, length) => str.length >= length;

/**
 * @param {HTMLElement} node
 * @param {boolean} isChecked
 */
const toogleClassChecked = (node, isChecked) => {
  if (!node) return;
  if (isChecked) node.classList.add('checked');
  else node.classList.remove('checked');
};

document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const passwordElt = document.getElementById('password');
  const passwordConfirmElt = document.getElementById('password_confirm');
  const lowercaseElt = document.querySelector('.critere.minuscule');
  const uppercaseElt = document.querySelector('.critere.majuscule');
  const numberElt = document.querySelector('.critere.chiffre');
  const minLengthElt = document.querySelector('.critere.plus8');
  const viewPasswordCheckbox = document.getElementById('viewPassword');

  passwordElt.addEventListener('input', (e) => {
    const value = e.target.value;
    toogleClassChecked(lowercaseElt, hasLowercase(value));
    toogleClassChecked(uppercaseElt, hasUppercase(value));
    toogleClassChecked(numberElt, hasNumber(value));
    toogleClassChecked(minLengthElt, hasMinLength(value, 8));
  });

  form.addEventListener('submit', (e) => {
    const value = passwordElt.value;
    const confirmValue = passwordConfirmElt.value;

    if (!hasLowercase(value) || !hasUppercase(value) || !hasNumber(value) || !hasMinLength(value, 8)) {
      e.preventDefault();
      alert("Le mot de passe ne respecte pas tous les critères.");
    } else if (value !== confirmValue) {
      e.preventDefault();
      alert("La confirmation du mot de passe ne correspond pas.");
    }
  });

  viewPasswordCheckbox.addEventListener('change', (e) => {
    const type = e.target.checked ? "text" : "password";
    passwordElt.type = type;
    if (passwordConfirmElt) passwordConfirmElt.type = type;
  });
});
