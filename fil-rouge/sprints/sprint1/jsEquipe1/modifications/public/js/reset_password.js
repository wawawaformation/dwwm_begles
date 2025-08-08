const passwordElt = document.getElementById("password");
const togglePasswordElt = document.getElementById("togglePassword");
const formElt = document.querySelector("form");


togglePasswordElt.addEventListener('change', function(){
    if(this.checked){
        passwordElt.setAttribute('type', 'text')
    } else {
        passwordElt.setAttribute('type', 'password')
    }
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