<?php

session_start();
require_once('Usuario.php');

if ($_POST) {
  $usuario = new Usuario (null, null, $_POST['email'], $_POST['password']);

  $errores = $usuario->validarLogin();

  if(empty($errores)) {
    $usuario->login($_POST['email'], $_POST['password']);
  } else {
    var_dump($errores);
  }
}
if(Usuario::estaLogueado()){
  header('location: home.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow|Barlow+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <meta charset="utf-8">
    <title></title>

</head>
<body>

<a href="registro.php">Registrate</a>
  <div class="container">
    <div class="row">
      <div class="col">
        <form method="post">
          <div class="main-container">
            <!--<div class="logo-container"><a href="index.php"><img src="images/logo.jpeg" alt="mascotas" class="small-logo"></img></a></div> -->

            <div class="header-form">
              <h2>Bienvenido a</h2><h1></h1>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email.com" value="">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            </div>

            <div><button type="submit" class="btn-primary">INGRESA</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="bootstrap.min.js">
  </script>
</body>
</html>
