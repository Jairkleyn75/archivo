<?php

class Conexion{

private static $conexion;

public static function abrirConexion(){
	if (!isset(self::$conexion)){

		try{
			include_once "Config.inc.php";
			self::$conexion = new PDO('mysql:host='.$nombre_servidor.'; dbname='.$nombre_base_datos, $nombre_usuario, $password);
			self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$conexion -> exec("SET CHARACTER SET utf8");

			print "Conexion Abierta";
		}catch(PDOException $ex){
			print "ERROR: ". $ex -> getMessage() . "<br>";
			die();
		}
	}
}

public static function cerrarConexion(){
	if (isset(self::$conexion)) {
		self::$conexion = null;
		print "Conexion Cerrada";
	}
}

public static function obtenerConexion(){
	return self::$conexion;
}
}

?>