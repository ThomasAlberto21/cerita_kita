// Hamburger Menu
const hamburgerMenu = document.querySelector('.hamburger-menu');
const navbarMenu = document.querySelector('.navbar-menu');
const btnLogin = document.querySelector('.btn-login');

hamburgerMenu.addEventListener('click', () => {
  hamburgerMenu.classList.toggle('active');
  navbarMenu.classList.toggle('active');
  btnLogin.classList.toggle('active');
});


