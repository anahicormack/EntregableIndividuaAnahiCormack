<?php
  class Usuario {
    private $Id;

    public $name;
    public $email;
    public $password;

    public static function registrar($datosUsuario) {
      require_once 'connect.php';

      try {
    		$sql = "INSERT INTO users (name, email, password) VALUES('".$datosUsuario['name']."', '".$datosUsuario['email']."', '".$datosUsuario['password']."')";
        $query = $db->prepare($sql);
    		$query->execute();
    	}
    	catch( PDOException $Exception ) {
        var_dump($Exception);
    	}
    }


    public static function validar($datosUsuario) {
      $errores = [];

      if(trim($datosUsuario['name']) == '') {
        $errores[] = "Debe completar este campo";
      }
      if(trim($datosUsuario['email']) == '') {
        $errores[] = "Debe completar este campo";
      } elseif (!filter_var($datosUsuario['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Debes ingresar un formato válido de email';
      }
      if(trim($datosUsuario['password']) == '') {
        $errores[] = "Debe completar este campo";
      }
      return $errores;
    }


    public static function login($email, $pass) {
      require_once 'connect.php';

      try {
        $sql = "SELECT * FROM users WHERE email = '". $email. "' and password ='" .$pass. "'";
        $query = $db->prepare($sql);
        $query->execute();
        $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

        if(empty($usuarios)){

        } else {
            $_SESSION["id"] = $usuarios[0]['id'];
            header('Location: home.php');
          }
      }

      catch( PDOException $Exception ) {
        var_dump($Exception);
      }
    }

    public static function validarLogin($datosUsuario) {
      $errores = [];

      if(trim($datosUsuario['email']) == '') {
        $errores[] = "Debe completar este campo";
      } elseif (!filter_var($datosUsuario['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Debes ingresar un formato válido de email';
      }
      if(trim($datosUsuario['password']) == '') {
        $errores[] = "Debe completar este campo";
      }
      return $errores;
    }


    public static function estaLogueado(){
      return isset($_SESSION["id"]);
    }
  }

?>