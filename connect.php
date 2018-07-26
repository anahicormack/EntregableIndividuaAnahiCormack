<?php
	$ruta = 'mysql:host=localhost; dbname=movies_db; port=3306';
	$usuario = 'root';
	$password = 'root';
	$opciones = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
		$db = new PDO($ruta, $usuario, $password, $opciones);
		//echo "Me conecté todo joya";
	}
	catch( PDOException $ErrorEnConexion ) {
		echo "Se ha producido un error: ".$ErrorEnConexion->getMessage();
	}
?>
