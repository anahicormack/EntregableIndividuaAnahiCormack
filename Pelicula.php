<?php
  class Pelicula {
    private $Id;
    private $tittle;
    private $rating;
    private $awards;


    public static function crear($datosPelicula) {
      require_once 'connect.php';

      try {
    		$sql = "INSERT INTO movies (title, rating, awards, release_date, length) VALUES ('{$datosPelicula['title']}','{$datosPelicula['rating']}','{$datosPelicula['awards']}','{$datosPelicula['release_date']}','{$datosPelicula['length']}')";
        $query = $db->prepare($sql);
    		$query->execute();
    	}
    	catch( PDOException $Exception ) {
        var_dump($Exception);
    	}
    }
  }

?>
