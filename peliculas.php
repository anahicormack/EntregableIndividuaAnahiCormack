<?php

//aca se tiene que ver cada pelicula como objeto
require_once('Peliculas.php');
$peliculas = Peliculas::ObtenerTodas();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title></title>
  </head>
  <body>

    <ul>
      <?php
      foreach ($peliculas as $value):
      ?>
      <li><?= $value['title'] ?>, <?= $value['rating'] ?>, <?= $value['awards'] ?>, <?= $value['release_date'] ?>, <?= $value['length'] ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
