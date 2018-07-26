<?php


  class Peliculas {

    public static $TodosLasPeliculas;

    public static function ObtenerTodas() {
      if (!isset(self::$TodasLasPeliculas)) {

        require_once 'connect.php';

        try {
          $sql = "SELECT * FROM movies";
          $query = $db->prepare($sql);
          $query->execute();
          $peliculas = $query->fetchAll(PDO::FETCH_ASSOC);
          return $peliculas;

        }

        catch( PDOException $Exception ) {
          var_dump($Exception);
        }
      }
    }
  }
?>
