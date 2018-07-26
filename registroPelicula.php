<?php
session_start();
require_once('Pelicula.php');
require_once('Usuario.php');
require_once('Generos.php');

if ($_POST) {

  Pelicula::crear($_POST);

}
if(Usuario::estaLogueado()){
  header('location: home.php');
  exit;
}

$elegir = Generos::ListadoGeneros();
//foreach ($elegir as $name=> $value) {
  //echo $value;
//}

var_dump($elegir);

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
  <div class="register"><h2>Ingresa tu película</h2></div>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="exampleInputName"></label>
      <input type="text" class="form-control" id="exampleInputName" name="title" aria-describedby="nameHelp"  placeholder="Titulo" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputNumber"></label>
      <input type="number" class="form-control" id="exampleInputNumber" name="rating" aria-describedby="nameHelp"  placeholder="Raiting" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputNumber"></label>
      <input type="number" class="form-control" id="exampleInputNumber" name="awards" aria-describedby="nameHelp"  placeholder="Premios" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputNumber"></label>
      <input type="text" class="form-control" id="exampleInputText" name="release_date" aria-describedby="nameHelp"  placeholder="Fecha de estreno" value="">
    </div>

    <div class="form-group">
      <label for="exampleInputNumber"></label>
      <input type="number" class="form-control" id="exampleInputNumber" name="length" aria-describedby="nameHelp"  placeholder="Duración" value="">
    </div>

    <div class='form-group'>
      <label for='pais'></label>
        <select class="form-control select-pais" name="genero">
        <option class="select-genero">Genero</option>
        <?php foreach($elegir as $genero):?>
          <option><?=$genero['name']?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <div><button type="createAccount" class="btn-primary">INGRESA TU PELICULA</button></div>

  </form>
  <script type="text/javascript" src="bootstrap.min.js">
  </script>
</body>
</html>
