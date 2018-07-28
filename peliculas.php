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
      <li><?=$value->getId()?>,<?= $value->getTitle()?>,<?= $value->getRating()?>,<?= $value->getAwards()?>,<?= $value->getReleaseDate()?>,<?= $value->getLength()?>,<?= $value->getGenre()?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
