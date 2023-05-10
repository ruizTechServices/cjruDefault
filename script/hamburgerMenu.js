// hamburgerMenu.js
export function initHamburgerMenu() {
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  }

  function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  }

  hamburger.addEventListener("click", mobileMenu);

  const navLink = document.querySelectorAll(".nav-link");
  navLink.forEach((n) => n.addEventListener("click", closeMenu));
}
