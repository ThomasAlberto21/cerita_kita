// Hamburger Menu
const hamburgerMenu = document.querySelector('.hamburger-menu');
const navbarMenu = document.querySelector('.navbar-menu');
const btnLogin = document.querySelector('.btn-login');

hamburgerMenu.addEventListener('click', () => {
  hamburgerMenu.classList.toggle('active');
  navbarMenu.classList.toggle('active');
  btnLogin.classList.toggle('active');
});

// Activity
const carousel = document.querySelector('.carousel');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let scrollLeft = 0;

prevBtn.addEventListener('click', () => {
  carousel.scrollLeft -= carousel.offsetWidth;
});

nextBtn.addEventListener('click', () => {
  carousel.scrollLeft += carousel.offsetWidth;
});

carousel.addEventListener('scroll', () => {
  scrollLeft = carousel.scrollLeft;
});

