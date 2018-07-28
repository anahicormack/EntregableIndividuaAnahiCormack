<?php
require_once('Usuario.php');

  class Usuarios {

    public static function ObtenerTodos() {

        require_once 'connect.php';

        try {
          $sql = "SELECT id, name, email FROM users";
          $query = $db->prepare($sql);
          $query->execute();
          while ($UnRegistro = $query->fetch(PDO::FETCH_ASSOC)) {
           $UnUsuario = new Usuario ($UnRegistro['id'], $UnRegistro['name'], $UnRegistro['email'], $UnRegistro['email']);
           $UsuariosADevolver[] = $UnUsuario;
          }
        } catch(PDOException $Exception) {
          var_dump($Exception);
        }
             
      return $UsuariosADevolver;
    }
  }


?>
