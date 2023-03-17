<?php 
include 'conn.php';
// Button register
if(isset($_POST['register']))

// Mengambil inputan dari form
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];

// Ency password
$epass = password_hash($pass, PASSWORD_DEFAULT);

// Menambah inputan kedalam database
$register = mysqli_query($conn,"INSERT INTO user (email,username,pass) values ('$email','$username','$epass')");

// kondisi jika inputan berhasil dan jika inputan tidak benar
if ($register) {
    header('location:../frontend/Login.php');
}else{
    echo "<script>alert('Register Gagal!');
	  window.location.href='../frontend/Register.php';
	  </script>";
}
?>