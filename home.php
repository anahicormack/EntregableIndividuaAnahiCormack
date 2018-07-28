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
 <?php
include("menu.php");
  ?>
