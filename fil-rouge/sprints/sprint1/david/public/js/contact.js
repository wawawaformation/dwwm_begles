
document.addEventListener('DOMContentLoaded', function () {
    const name = document.getElementById('name');
    const firstname = document.getElementById('firstname');
    const email = document.getElementById('email');
    const message = document.getElementById('message');
    const accept = document.getElementById('accept');
    const submitBtn = document.getElementById('submitBtn');

    function checkFormValidity() {
        const allFilled = name.value.trim() !== '' &&
                          firstname.value.trim() !== '' &&
                          email.value.trim() !== '' &&
                          message.value.trim() !== '' &&
                          accept.checked;

        submitBtn.disabled = !allFilled;
    }

    
    [name, firstname, email, message, accept].forEach(el => {
        el.addEventListener('input', checkFormValidity);
        el.addEventListener('change', checkFormValidity); 
    });
});
