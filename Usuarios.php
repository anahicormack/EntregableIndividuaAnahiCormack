<?php

  class Usuarios {

    public static $TodosLosUsuarios;

    public static function ObtenerTodos() {
      if (!isset(self::$TodosLosUsuarios)) {

        require_once 'connect.php';

        try {
          $sql = "SELECT name, email FROM users";
          $query = $db->prepare($sql);
          $query->execute();
          $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
          return $usuarios;
        }

        catch( PDOException $Exception ) {
          var_dump($Exception);
        }
      }
    }
  }
?>
