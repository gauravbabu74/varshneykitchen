
burger = document.querySelector(".hamburger");
navbar = document.querySelector(".nav-menu");
burger.addEventListener("click", () => {
  if (navbar.classList.contains("nav-menu")) {
    navbar.classList.remove("nav-menu");
    navbar.classList.add("nav-items-1");
  } else {
    navbar.classList.add("nav-menu");
    navbar.classList.remove("nav-items-1");
  }
});
