<?php 
include 'conn.php';
session_start();

if(isset($_POST['login']))

$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND pass = '$pass'");
$login_count = mysqli_num_rows($login);
$login_cek = mysqli_fetch_array($login);
$userpass = $pass['pass'];

if ($login_cek > 0 ) {
    if(password_verify($userpass,$pass)){
        $_SESSION['username'] = $username;
        $_SESSION['pass'] = $pass;
        header('location:location:../frontend/index.php');
    }else{
         echo "<script>alert('Nik Atau Nama Salah!');
	  window.location.href='../frontend/register.php';
	  </script>";
    }
}else{
    echo "<script>alert('Nik Atau Nama Salah!');
	  history.go(-1)
	  </script>";
}
?>