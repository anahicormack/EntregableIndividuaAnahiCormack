<?php
require_once('Usuarios.php');
$usuarios = Usuarios::ObtenerTodos();
var_dump($usuarios);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>
      <?php
      foreach ($usuarios as $value):
      ?>
      <li><?= $value['name'] ?>, <?= $value['email'] ?></li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
