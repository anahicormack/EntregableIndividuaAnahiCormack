<?php
session_start();
require_once('Peliculas.php');

require_once('Usuario.php');

if(!Usuario::estaLogueado()){
  header('location: login.php');
  exit;
}

$peliculas = Peliculas::ObtenerTodas();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title></title>
  </head>
  <body>
    <?php
    include("menu.php");
    ?>
    <ul>
      <?php
      foreach ($peliculas as $value):
      ?>
      <li><?=$value->getId()?>,<?= $value->getTitle()?>,<?= $value->getRating()?>,<?= $value->getAwards()?>,<?= $value->getReleaseDate()?>,<?= $value->getLength()?>,<?= $value->getGenre()?></li>
      <?php endforeach; ?>
    </ul>

  </body>
</html>
