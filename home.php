<?php
session_start();
var_dump($_SESSION);
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

<a href="home.php?logout">Cerrar sesión</a>
