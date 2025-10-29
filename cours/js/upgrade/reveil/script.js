const feedbackElt = document.getElementById('feedback')

document.querySelector('form').addEventListener('submit', function(e){
    e.preventDefault()
   if(!e.target.nom.value.trim().length 
        || !e.target.email.value.trim().length
        || !e.target.message.value.trim().length
    ){

         feedbackElt.textContent = 'Nein, das ist nicht gut'
        feedbackElt.classList.add('alert-danger');
       
    }else{

        msg = `Oui ${e.target.nom.value}, je es génial`
        
        feedbackElt.textContent = msg
        feedbackElt.classList.add('alert-success');
        
    }

})

//a refactoriser