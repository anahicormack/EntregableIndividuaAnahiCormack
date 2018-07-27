
<?php
require_once('Pelicula.php');

  class Peliculas {

    public static $cantidad;
    public static $todasLasPeliculas;

    public static function ObtenerTodas() {
      if (!isset(self::$todasLasPeliculas)) {

        require_once 'connect.php';

        try {
          $sql = "SELECT * FROM movies";
          $query = $db->prepare($sql);
          $query->execute();
          while ($UnaPelicula = $query->fetch(PDO::FETCH_ASSOC)) {
           $UnaPelicula = new Pelicula ($UnaPelicula['id'], $UnaPelicula['title'], $UnaPelicula['rating'], $UnaPelicula['awards'], $UnaPelicula['release_date'], $UnaPelicula['length']);
           $PeliculasADevolver[] = $UnaPelicula;
          }

        } catch(PDOException $Exception) {
          var_dump($Exception);
          }
             self::$cantidad=count($PeliculasADevolver);
             self::$todasLasPeliculas=$PeliculasADevolver;
      } else {
             $PeliculasADevolver= self::$todasLasPeliculas;
            }
      return $PeliculasADevolver;
    }
  }


?>
