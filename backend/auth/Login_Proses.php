<?php 
include '../conn.php';
session_start();

// Mengambil inputan dari form
$username = $_POST['username'];
$pass = $_POST['password'];


// mengambil data dari database dan dicek
$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$fetch =  mysqli_fetch_array($login);
$userpass = $fetch['password'];
$useremail = $fetch['email'];

if (mysqli_num_rows($login)==1) {
    // verifikasi dari password yg dihash
    $_SESSION['email'] = $useremail;
    if (password_verify($pass,$userpass)){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'Login Berhasil';
        header('location:../../frontend/admin/index.php');
    }else{
        echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../../frontend/admin/login.php';
	</script>";
    }
}else{
	echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../../frontend/admin/login.php';
	</script>";
}
 ?>
    