// Afficher / masquer les mots de passe
document.getElementById('togglePassword').addEventListener('change', function () {
    const type = this.checked ? 'text' : 'password';
    document.getElementById('password').setAttribute('type', type);
    document.getElementById('confirm_password').setAttribute('type', type);
});

// Conditions deviennent vertes lorqu'elles sont validées
document.getElementById('password').addEventListener('input', function () {
    const pwd = this.value;
    const rules = document.querySelectorAll('ul li');

    rules.forEach((li) => {
        const text = li.textContent;

        if (text.includes('12 caractères')) {
            toggleRule(li, pwd.length >= 12);
        }

        if (text.includes('1 majuscule')) {
            toggleRule(li, /[A-Z]/.test(pwd));
        }

        if (text.includes('1 chiffre')) {
            toggleRule(li, /\d/.test(pwd));
        }
    });
});

function toggleRule(element, isValid) {
    element.classList.remove(isValid ? 'text-danger' : 'text-success');
    element.classList.add(isValid ? 'text-success' : 'text-danger');
}

// Validation du formulaire
document.getElementById('resetForm').addEventListener('submit', function (e) {
    const pwd = e.target.password.value;
    const confirmPwd = e.target.confirm_password.value;
    const errorMsg = document.getElementById('errorMsg');
    const confirmLabel = document.querySelector('[for="confirm_password"]');

    // Vérifie les critères du mot de passe
    const isValid =
        pwd.length >= 12 &&
        /[A-Z]/.test(pwd) &&
        /\d/.test(pwd) &&
        pwd === confirmPwd;



    if (!isValid) {
        e.preventDefault(); //Envoie pas le formulaire s'il n'est pas valide
        errorMsg.classList.remove('d-none');
        confirmLabel.textContent = 'Confirmer le mot de passe - erreur';
        confirmLabel.style.color = 'red';
    } else {
        errorMsg.classList.add('d-none');
        confirmLabel.textContent = 'Confirmer le mot de passe';
        confirmLabel.style.color = '';
        alert('Les mots de passe sont identiques et valides');
    }
});