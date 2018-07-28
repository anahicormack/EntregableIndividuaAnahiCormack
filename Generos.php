<?php
require_once('Genero.php');

  class Generos {

    public static function ListadoGeneros() {
      require_once 'connect.php';

      global $db;

      try {
        $sql = "SELECT id, name FROM genres";
        $query = $db->prepare($sql);
        $query->execute();
        while ($UnGenero = $query->fetch(PDO::FETCH_ASSOC)) {
         $UnGenero = new Genero ($UnGenero['id'], $UnGenero['name']);
         $GenerosADevolver[] = $UnGenero;
        }
        return $GenerosADevolver;
      }
      catch( PDOException $Exception ) {
        var_dump($Exception);
      }
    }
  }
?>
