<?php

include 'global/config.php';

ini_set('session.save_path', '/data');
//Retrieving the session save path
$res = session_save_path();	
		 
//Starting the session
session_start();	
error_reporting(0);
if (isset($_POST["signup"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM user WHERE email='$email'"));
  if ($password !== $cpassword) {
    echo "<script>alert('Las contraseñas no coinciden.');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Este email ya se encuentra registrado.');</script>";
  } else {
    $sql = "INSERT INTO user (IDTypeofUser, full_name, email, password, status) VALUES (1, '$full_name', '$email', '$password', 1)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Registro Exitoso.');</script>";
    } else {
      echo "<script>alert('Registro Fallido.');</script>";
    }
  }
}

if (isset($_POST["signin"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $check_email = mysqli_query($conn, "SELECT full_name FROM user WHERE email='$email' AND password='$password' AND status='1'");

  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_name"] = $row['full_name'];
    header("Location: skydash/users.php");
  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/logreg.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>TI-Admin</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Inico de Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Correo Electronico" name="email" id="email"/>
            </div>
            <div class="input-field">
              <i class="uil uil-eye-slash showHidePw"></i>
              <input type="password" class="password" placeholder="Contraseña" name="password" id="password"/>
            </div>
            <input type="submit" value="Iniciar" name="signin" class="btn solid" />
          </form>

          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Registro</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre de Usuario" name="signup_full_name" id="signup_full_name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="signup_email" id="signup_email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="password" placeholder="Contraseña" name="signup_password" id="signup_password" require/>
            </div>
            <div class="input-field">
                <i class="uil uil-eye-slash showHidePw"></i>
                <input type="password" class="password" placeholder="Confirmar contraseña" name="signup_cpassword" id="signup_cpassword" require/>
                
              </div>
            <input type="submit" class="btn" name="signup" value="Registrate" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿Nuevo Aquí?</h3>
            <p>
              ¡Registrate y comienza a utilizar esta maravillosa herramienta!
            </p>
            <button class="btn transparent" id="sign-up-btn"><i class="fas fa-registered"></i>
              Registrarse
            </button>
            <button class="btn transparent"><i class="fas fa-arrow-circle-left"></i>
                 <a href="index.html">Volver</a>
            </button>
          </div>
          <img src="img/DSMP_LOGO.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya eres uno de nosotros?</h3>
            <p>
              Inicia sesión pulsando este botón.
            </p>
            <button class="btn transparent" id="sign-in-btn"><i class="fas fa-play-circle"></i>
              Iniciar
            </button>
          </div>
          <img src="img/EN_LOGO.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>