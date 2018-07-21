<?php
session_start();
require_once('Usuario.php');

if ($_POST) {

  $errores = Usuario::validar($_POST);
  if(empty($errores)){
    Usuario::registrar($_POST);
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
  <div class="register"><h2>REGISTRATE</h2></div>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputName"></label>
      <input type="name" class="form-control" id="exampleInputName" name="name" aria-describedby="nameHelp"  placeholder="Nombre" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1"></label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Email" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1"></label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Contraseña">
    </div>


    <div><button type="createAccount" class="btn-primary">CREA TU CUENTA</button></div>
    <div class="footer-form">
      <p> Al registrarme, declaro que soy mayor de edad y acepto los<a href="construction.php"> Términos y condiciones y las Políticas de privacidad </a>de <span class="name-in-footer">Patitas a casa</span></p>
    </div>
  </form>
  <script type="text/javascript" src="bootstrap.min.js">
  </script>
</body>
</html>
