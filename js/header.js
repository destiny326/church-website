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

// Auto add padding to page content equal to header height
function setPageContentPadding() {
  const header = document.querySelector('header');
  const pageContent = document.querySelector('.page-content');
  if (header && pageContent) {
    const headerHeight = header.offsetHeight;
    pageContent.style.paddingTop = headerHeight + 'px';
  }
}

// Initial call
setPageContentPadding();

// Update on window resize (responsive)
window.addEventListener('resize', setPageContentPadding);
