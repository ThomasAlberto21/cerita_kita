const hamburgerMenu = document.querySelector('.hamburger-menu');
const navbarMenu = document.querySelector('.navbar-menu');

hamburgerMenu.addEventListener('click', () => {
  hamburgerMenu.classList.toggle('active');
  navbarMenu.classList.toggle('active');
});
