document.addEventListener("DOMContentLoaded", () => {
  const burger = document.getElementById("menu-burger");
  const menu = document.getElementById("menu");
  const chapo = document.querySelector(".chapo");

  burger.addEventListener("click", () => {
    menu.classList.toggle("active");
    
    if (menu.classList.contains("active")) {
      chapo.style.display = "none";
    } else {
      chapo.style.display = "block";
    }
  });
});