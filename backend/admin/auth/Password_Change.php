<?php 
require '../conn.php';
session_start();

// Button Update
if(isset($_POST['Update']))

$usernames = $_SESSION['username'];
$username = $_POST['username'];
$pass_old = $_POST['pass_old'];
$new_pass = $_POST['new_pass'];

// if($pass_old == $new_pass) :
// if($pwd!=$old_pwd) :

$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$usernames'");
$fetch =  mysqli_fetch_array($login);
$userpass = $fetch['pass'];

// // Ency passwords
$newpass = password_hash($new_pass, PASSWORD_DEFAULT);

if(password_verify($pass_old,$userpass)){
    $update=mysqli_query($conn,"UPDATE user SET pass  = '$newpass' WHERE username ='$usernames'");
    echo "<script>alert('Update Data Berhasil!, Silahkan Login Kembali!');
            window.location.href='Logout.php';
            </script>";

}else{
    echo "<script>alert('Update Data Gagal!');
            window.location.href='update.php';
	        </script>";
}
?> 
