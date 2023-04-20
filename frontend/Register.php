<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link Css -->
    <link rel="stylesheet" href="styles/Login_Register.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="form">
      <h1>Register</h1>
      <form action="../backend/Register_Proses.php" method="POST">
        <label>Email</label>
        <input id="email" type="text" name="email" class="form_login" placeholder="Email" require/>
        <?php echo $message ?>
        <label>Username</label>
        <input id="username" type="text" name="username" class="form_login" placeholder="Username" require/>
        <label>Password</label>
        <input id="password" type="password" name="pass" class="form_login" placeholder="Enter Your Password" require />
        <div class="hide_show" onclick="change()">
          <i class="fa-solid fa-eye" id="eye"></i>
        </div>
        <br />
        <br />
        <button type="submit" name="register" class="LoginButton">Register</button>
        <a href="Login.php">Sudah Punya Akun?</a>
      </form>
    </div>

    <!-- Script JS -->
    <script src="script/Login_Register.js"></script>

    <!-- Script Font Awesome -->
    <script
      src="https://kit.fontawesome.com/44aef23333.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
