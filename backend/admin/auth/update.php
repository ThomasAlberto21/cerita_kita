
<?php 
		session_start();
		require '../conn.php';
		if (!isset($_SESSION['username'])) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu!');window.location.href='Session.php'</script>";
		}
        
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link Css -->
    <link rel="stylesheet" href="../../../frontend/styles/Login_Register.css" />
    <title>Register</title>
  </head>
  <style>
    @keyframes fade-inout {
        0%{opacity :1;}
        50%{opacity :0.5;}
        50%{opacity :0.5;}
        100%{opacity :0;}
        

    }
    .alert{
        animation: fade-inout 2s linear forwards;
        text-align :center;
        color: green;
    }
  </style>
  <body>
    <div class="form">
      <h1>Register</h1>
      <div class="alert">
          <?php if(isset($_SESSION['status'])) {
              echo $_SESSION['status'];}?>
      </div>
      <?php unset($_SESSION['status']); ?>
      <form action="Password_Change.php" method="POST">
        <label>Email</label>
        <input id="email" type="text" name="email" class="form_login" value = "<?php echo $_SESSION['email']; ?>" >
        <label>Username</label>
        <input id="username" type="text" name="username" class="form_login" value = "<?php echo $_SESSION['username'];?>" require/>
        <label>Password</label>
        <input id="password" type="password" name="pass_old" class="form_login" placeholder="Enter Your Password" require />
        <div class="hide_show" onclick="change()">
            <i class="fa-solid fa-eye" id="eye"></i>
        </div>
        <br> 
        <label>Password</label>
        <input id="password" type="password" name="new_pass" class="form_login" placeholder="Repeat Your Password" require />
        <div class="hide_show" onclick="change()">
          <i class="fa-solid fa-eye" id="eye"></i>
        </div>
        <br />
        <br />
        <button type="submit" name="Update" class="LoginButton">Update</button>
        <p style="text-align: center;">Sudah Punya Akun ? <a href="login.php">Login</a></p>
      </form>
    </div>

    <!-- Script JS -->
    <script src="../backend/script/Login_Register.js"></script>

    <!-- Script Font Awesome -->
    <script
      src="https://kit.fontawesome.com/44aef23333.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
