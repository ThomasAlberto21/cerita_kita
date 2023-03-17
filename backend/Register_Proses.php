<?php 
include 'conn.php';

if(isset($_POST['register']))

$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$epass = password_hash($pass, PASSWORD_DEFAULT);

$register = mysqli_query($conn,"INSERT INTO user (email,username,pass) values ('$email','$username','$epass')");

if ($register) {
    header('location:location:../frontend/index.php');

}else{
    echo "<script>alert('Register Gagal!');
	  window.location.href='../frontend/Register.php';
	  </script>";
}
?>