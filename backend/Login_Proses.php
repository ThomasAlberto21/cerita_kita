<?php 
include 'conn.php';
session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$cek = mysqli_num_rows($login);
$ftch =  mysqli_fetch_array($login);
$userpass = $ftch['pass'];
if ($cek > 0) {
    if (password_verify($pass,$userpass)){
	header('location:../frontend/index.php');
    }else{
        echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../frontend/Login.php';
	</script>";
    }
}else{
	echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../frontend/Login.php';
	</script>";
}
 ?>
