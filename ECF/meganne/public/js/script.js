const burger = document.querySelector(".burger");

burger.addEventListener("click", (event) => {
    const navPrimary = document.querySelector(".menu");
    navPrimary.classList.toggle("open");
})