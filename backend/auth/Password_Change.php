<?php 
require '../conn.php';
session_start();

// Button Update
if(isset($_POST['Update']))

$usernames = $_SESSION['username'];
$pass_lama = $_POST['pass_old'];
$pass_baru = $_POST['new_pass'];


$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$usernames'");
$fetch =  mysqli_fetch_array($login);
$userpass = $fetch['pass'];

// // Ency passwords
$newpass = password_hash($pass_baru, PASSWORD_DEFAULT);

if(password_verify($pass_lama,$userpass)){
    $update=mysqli_query($conn,"UPDATE user SET password  = '$newpass' WHERE username ='$usernames'");
    echo "<script>alert('Update Data Berhasil!, Silahkan Login Kembali!');
            window.location.href='Logout.php';
            </script>";

}else{
    echo "<script>alert('Update Data Gagal!');
            window.location.href='update.php';
	        </script>";
}
?> 
