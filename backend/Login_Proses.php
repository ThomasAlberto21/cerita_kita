<?php 
include 'conn.php';
session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND pass = '$pass'");
$login_cek = mysqli_num_rows($login);

if ($login_cek > 0 ) {
    $_SESSION['username'] = $username;
    $_SESSION['pass'] = $pass;
    header('location:index.php');
}else{
    echo "<script>alert('Nik Atau Nama Salah!');
	  history.go(-1)
	  </script>";
}
?>