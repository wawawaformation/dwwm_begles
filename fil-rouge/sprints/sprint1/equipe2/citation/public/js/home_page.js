let overlayImage = document.getElementById("slide");


const photosCount = 4 ; // je définis le nb d'images que je possède

function changeSlide(sens) {
   let currentPath = parseInt(overlayImage.src.split('/')[6]); //je dis à mon URL => tu ne changes pas seul le 4ème après / caractère de mon url change. Je le trouve en faisant console.log(currentPath)
   let newPath = currentPath + sens;
    if (newPath < 1){
        newPath = photosCount;
    }
    if (newPath > photosCount){
        newPath = 1;
    }
   overlayImage.src = `http://127.0.0.1:5501/citation/public/img/${newPath}.webp`

}