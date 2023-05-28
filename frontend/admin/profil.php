<?php
session_start();
require '../../backend/conn.php';
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Silahkan Login Terlebih Dahulu!');window.location.href='../../backend/auth/Session.php'</script>";
}
$user=$_SESSION['username'];
$perintah="SELECT * FROM user where (username='$user' OR email='$user')"; 
 //pilih berdasarkan login emailnya
$query=mysqli_query($conn,$perintah); //buart query
$data=mysqli_fetch_array($query); //pecah datanya
?>

  <?php include '../section/admin_header.php' ?>
  
<style>
  @keyframes fade-inout {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0.5;
    }

    50% {
      opacity: 0.5;
    }

    100% {
      opacity: 0;
    }


  }

  .alert {
    animation: fade-inout 2s linear forwards;
    text-align: center;
    color: green;
  }
</style>

<body>
  <div class="container">
  <div class="form">
    <h1>Profil</h1>
    <div class="alert">
      <?php if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
      } ?>
    </div>
    <?php unset($_SESSION['status']); ?>
    <form action="../../backend/auth/Password_Change.php" method="POST">
      <label>Email</label>
      <input id="email" type="text" name="email" class="form_login" disabled="disabled" value="<?php echo $data['email']; ?>">
      <label>Username</label>
      <input id="username" type="text" name="username" class="form_login" disabled="disabled" value="<?php echo $_SESSION['username']; ?>" require />
      <label>Password</label>
      <input id="password" type="password" name="pass_old" class="form_login" placeholder="Masukan Password Lama" require autofocus/>
      <div class="hide_show" onclick="change()">
        <i class="fa-solid fa-eye" id="eye"></i>
      </div>
      <br>
      <br>
      <label>New Password</label>
      <input id="password" type="password" name="new_pass" class="form_login" placeholder="Masukan Password Baru" require autofocus/>
      <div class="hide_show" onclick="change()">
        <i class="fa-solid fa-eye" id="eye"></i>
      </div>
      <br>
      <br>
      <button type="submit" name="Update" class="LoginButton">Update</button>
    </form>
  </div>
  </div>

<?php include '../section/admin_footer.php' ?>