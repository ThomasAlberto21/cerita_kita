<?php 
include '../conn.php';
session_start();

// Mengambil inputan dari form
$username = $_POST['username'];
$pass = $_POST['pass'];


// mengambil data dari database dan dicek
$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
$cek = mysqli_num_rows($login);
$fetch =  mysqli_fetch_array($login);
$userpass = $fetch['pass'];

if ($cek > 0) {
    // verifikasi dari password yg dihash
    if (password_verify($pass,$userpass)){
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'Login Berhasil';
        $_SESSION['loggedin'] = true;
	   header('location:update.php');
    }else{
        echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../../frontend/Login.php';
	</script>";
    }
}else{
	echo "<script>alert('Username Atau Password Salah!');
	window.location.href='../../frontend/Login.php';
	</script>";
}
 ?>