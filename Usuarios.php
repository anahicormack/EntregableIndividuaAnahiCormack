<?php
  class Usuarios {
    public static $cantidad;
    public static $TodosLosUsuarios;
    public static function ObtenerTodos() {
      if (!isset(self::$TodosLosUsuarios)){
        require_once 'connect.php';
        try {
          $sql = "SELECT id, name, email FROM users";
          $query = $db->prepare($sql);
          $query->execute();

      while ($UnRegistro = $query->fetch(PDO::FETCH_ASSOC)) {
           $UnUsuario = new User($UnRegistro['name'], $UnRegistro['email'],$UnRegistro['id']);
           $UsuariosADevolver[] = $UnUsuario;
          }
             self::$cantidad=count($UsuariosADevolver);
             self::$todosLosUsuarios=$UsuariosADevolver;
       } else {
             $UsuariosADevolver= self::$todosLosUsuarios;
            }
      return $UsuariosADevolver;
      }
        catch(PDOException $Exception) {
          var_dump($Exception);
        }
      }
    }

?>
