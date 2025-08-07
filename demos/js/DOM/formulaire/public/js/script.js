const showPasswordElt = document.getElementById('showPassword');
const passwordElt = document.getElementById('password');
const labelPasswordElt = document.querySelector('label[for="password"]');
const emailElt = document.getElementById('email');
const form = document.querySelector('form');



// Affiche ou masque le mot de passe
showPasswordElt.addEventListener('change', function() {
    const type = this.checked ? 'text' : 'password';
    passwordElt.setAttribute('type', type);
    confirmPasswordElt.setAttribute('type', type);
});



// affiche un message lors du focus sur le champ email
emailElt.addEventListener('focus', function() {
    messageElt = document.createElement('div');
    messageElt.setAttribute('id', 'message');
    messageElt.textContent = 'Un mail de confirmation vous sera envoyé à l\'adresse indiquée.';
    messageElt.classList.add('text-success', 'mt-2');
    emailElt.parentNode.insertBefore(messageElt, emailElt.nextSibling);
});

// supprime le message lors du blur sur le champ email
emailElt.addEventListener('blur', function() {
    document.getElementById('message')?.remove();
});


// Vérifie que les mots de passe correspondent à l'envoi du formulaire
form.addEventListener('submit', function(event) {
    const confirmPasswordElt = document.getElementById('confirm-password');
     event.preventDefault();
    if (passwordElt.value !== confirmPasswordElt.value) {
        
        alert('Les mots de passe ne correspondent pas.');
        
    } else {
        alert('Les mots de passe correspondent.');
    }
});