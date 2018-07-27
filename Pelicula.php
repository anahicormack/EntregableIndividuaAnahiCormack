<?php
  class Pelicula {

    private $id;
    private $tittle;
    private $rating;
    private $awards;
    private $release_date;
    private $length;

    public function __construct($id,$title, $rating, $awards, $release_date, $length)

    {
      $this->id = $id;
      $this->title = trim($title);
      $this->rating = trim($rating);
      $this->$awards = trim($awards);
      $this->release_date = trim($release_date);
      $this->length = trim($length);
    }

    public function crear($datosPelicula) {
      require_once 'connect.php';

      try {
    		$sql = "INSERT INTO movies (title, rating, awards, release_date, length) VALUES ('{$this->title}', '{$this->rating}', '{$this->awards}', '{$this->release_date}', '{$this->length}')";
        $query = $db->prepare($sql);
    		$query->execute();
    	}
    	catch( PDOException $Exception ) {
        var_dump($Exception);
    	}
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getRating(){
        return $this->rating;
    }
    public function getAwards(){
        return $this->awards;
    }
    public function getReleaseDate(){
        return $this->release_date;
    }
    public function getLength(){
        return $this->length;
    }
  }

?>
