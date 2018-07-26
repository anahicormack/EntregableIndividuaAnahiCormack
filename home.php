<?php
session_start();

require_once('Usuario.php');

if(!Usuario::estaLogueado()){
  header('location: login.php');
  exit;
}
if (isset($_GET['logout']))
{
  session_destroy();
  header('Location: login.php');
}
?>

<h1>BIENVENIDO</h1>

<a href="peliculas.php">Ver todas las peliculas</a>
</br>
</br>
<a href="usuarios.php">Ver todos los usuarios</a>
</br>
</br>
<a href="home.php?logout">Cerrar sesión</a>
</br>
</br>
<a href="registroPelicula.php">Cargar pelicula</a>
