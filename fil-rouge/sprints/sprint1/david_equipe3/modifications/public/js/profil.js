const imageElt = document.getElementById('profile-picture');

document.getElementById("image").addEventListener("change", function(e) {
    const [picture] = e.target.files;
    if (picture) {
        const reader = new FileReader();
        reader.onload = function(event) {
            if (event.target.result) {
                imageElt.src = event.target.result;
            }
        }
        reader.readAsDataURL(picture);
    }
});