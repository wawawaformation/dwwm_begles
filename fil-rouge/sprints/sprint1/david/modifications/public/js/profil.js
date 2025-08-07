// Afficher la photo de profil importée
const inputImage = document.getElementById("image");
const previewImg = document.querySelector("img[src^='public/img/profils/']");

inputImage.addEventListener("change", function () {
    const file = this.files[0];

    if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();

        reader.onload = function (e) {
            previewImg.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
});


// Afficher / masquer les mots de passe
document.getElementById('togglePassword').addEventListener('change', function () {
    const type = this.checked ? 'text' : 'password';
    document.getElementById('password').setAttribute('type', type);
    document.getElementById('confirm_password').setAttribute('type', type);
});

// Conditions deviennent vertes lorsqu'elles sont validées
document.getElementById('password').addEventListener('input', function () {
    const pwd = this.value;
    const rules = document.querySelectorAll('.condition');

    rules.forEach((condition) => {
        const text = condition.textContent;

        if (text.includes('12 caractères')) {
            toggleRule(condition, pwd.length >= 12);
        }

        if (text.includes('majuscule')) {
            toggleRule(condition, /[A-Z]/.test(pwd));
        }

        if (text.includes('chiffre')) {
            toggleRule(condition, /\d/.test(pwd));
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

    const isValid =
        pwd.length >= 12 &&
        /[A-Z]/.test(pwd) &&
        /\d/.test(pwd) &&
        pwd === confirmPwd;

    if (!isValid) {
        e.preventDefault();
        errorMsg.classList.remove('d-none');
        confirmLabel.textContent = 'Confirmer le mot de passe - erreur';
        confirmLabel.style.color = 'red';
    } else {
        errorMsg.classList.add('d-none');
        confirmLabel.textContent = 'Confirmer le mot de passe';
        confirmLabel.style.color = '';
        alert('Votre mot de passe a été réinitialisé');
    }
});