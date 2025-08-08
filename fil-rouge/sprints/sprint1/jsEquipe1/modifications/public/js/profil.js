
const passwordElt = document.getElementById("password");
const showPasswordElt = document.getElementById("show");
const emailElt = document.getElementById("email");
const formElt = document.querySelector("form");
const image = document.getElementById('image');
const preview = document.getElementById('preview');

image.addEventListener('change', () => {
    const file = image.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = () => {
      preview.src = reader.result;
    };
    reader.readAsDataURL(file);
  });


showPasswordElt.addEventListener('change', function(){
    if(this.checked){
        passwordElt.setAttribute('type', 'text')
    } else {
        passwordElt.setAttribute('type', 'password')
    }
})


emailElt.addEventListener('focus', function () {
    const msgElt = document.createElement('span')
    msgElt.classList.add('text-info')
    msgElt.textContent = "Un mail de d’activation sera envoyé à cette adresse"

    const labelElt = document.querySelector('[for="email"]')
    labelElt.appendChild(msgElt)
})

emailElt.addEventListener('blur', function () {
    const labelElt = document.querySelector('[for="email"]')
    labelElt.innerHTML = ""
    labelElt.textContent = "Email"
})

formElt.addEventListener('submit', function (e) {
    e.preventDefault();
    let msg = "";

   
    const motDePasse = e.target.password.value;
    const regex = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{12,}$/;

    if (regex.test(motDePasse)) {
        console.log("Mot de passe valide");
    } else {
        console.log("Mot de passe invalide");
    }

    if (e.target.password.value === e.target.confirm_password.value) {
        msg = "Les mots de passe sont identiques";
    } else {
        msg = "les mots de passe différent";
        e.preventDefault();
    }
    alert(msg);
});