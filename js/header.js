let lastScrollY = window.scrollY;
const header = document.querySelector("header");
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

/* HIDE HEADER ON SCROLL */
window.addEventListener("scroll", () => {
  if (window.scrollY > lastScrollY && window.scrollY > 100) {
    header.classList.add("hide");
  } else {
    header.classList.remove("hide");
  }
  lastScrollY = window.scrollY;
});

/* HAMBURGER MENU */
hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("active");
});

/* CLOSE MENU ON LINK CLICK */
document.querySelectorAll("#nav-links a").forEach(link => {
  link.addEventListener("click", () => {
    navLinks.classList.remove("active");
  });
});
