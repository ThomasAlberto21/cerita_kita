// Hide Show Password
let showPassword = false;
function change() {
  if (showPassword) {
    document.getElementById('password').setAttribute('type', 'password');
    document.getElementById('eye').classList.remove('fa-eye-slash');
    document.getElementById('eye').classList.toggle('fa-eye');
    showPassword = false;
  } else {
    document.getElementById('password').setAttribute('type', 'text');
    document.getElementById('eye').classList.toggle('fa-eye-slash');
    document.getElementById('eye').classList.remove('fa-eye');
    showPassword = true;
  }
}
