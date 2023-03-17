<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Link css -->
    <link rel="stylesheet" href="styles/Login_Register.css" />

    <!-- link responsive css -->
    <link rel="stylesheet" href="styles/responsive.css" />

    <title>Login</title>
  </head>
  <body>
      <div class="form">
        <h1>Login</h1>
        <form action="login.php" method="POST">
          <label>Username</label>
          <input
            id="username"
            type="text"
            name="username"
            class="form_login"
            placeholder="Username"
            require
          />
          <label>Password</label>
          <input
            id="password"
            type="password"
            name="pass"
            class="form_login"
            placeholder="Enter Your Password"
            require
          />
          <div class="hide_show" onclick="change()">
            <i class="fa-solid fa-eye" id="eye"></i>
          </div>
          <br />
          <br />
          <button class="LoginButton">Login</button>
          <p>Tidak Punya Akun ? <a href="register.php">Register</a></p>
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
