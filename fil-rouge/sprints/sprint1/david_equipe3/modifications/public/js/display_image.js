const imageElt = document.getElementById('display-image');

document.getElementById("image").addEventListener("change", function(e) {
    const [picture] = e.target.files;
    if (picture) {
        const reader = new FileReader();
        reader.onload = function(event) {
            if (event.target.result) {
                imageElt.src = event.target.result;
                imageElt.classList.remove('collapse');
            }
        }
        reader.readAsDataURL(picture);
    }
});