<?php
session_start();
require_once('Usuarios.php');

require_once('Usuario.php');

if(!Usuario::estaLogueado()){
  header('location: login.php');
  exit;
}
$usuarios = Usuarios::ObtenerTodos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include("menu.php");
    ?>
    <ul>
      <?php
      foreach ($usuarios as $value):
      ?>
      <li><?= $value->getId()?>,<?= $value->getName()?>,<?= $value->getEmail()?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
