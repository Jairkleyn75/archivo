<?php

class Usuario {

	private $id;
	private $nombre;
	private $email;
	private $password;
	private $fecha_registro;
	private $activo;

#Constructor
	public function __construct($id, $nombre, $email, $password, $fecha_registro, $activo){
		$this ->	id = $id;
		$this ->	nombre = $nombre;
		$this ->	email = $email;
		$this ->	password = $password;
		$this ->	fecha_registro = $fecha_registro;
		$this ->	activo = $activo;

	}

	#Geters

	public function obtenerId(){
		return 	$this -> id;
	}
	public function obtenerNombre(){
		return 	$this -> nombre;
	}

	public function obtenerEmail(){
		return 	$this -> email;
	}

	public function obtenerPassword(){
		return 	$this -> password;
	}
	public function obtenerFechaRegistro(){
		return 	$this -> fecha_registro;
	}
	public function estaActivo(){
		return 	$this -> activo;
	}

	#Seters

	public function cambiarNombre($nombre){
		$this -> nombre = $nombre;
	}

	public function cambiarPassword($password){
		$this -> nombre = $password;
	}

	public function cambiarEmail($email){
		$this -> nombre = $email;
	}
	public function cambiarActivo($activo){
		$this -> nombre = $activo;
	}
	
}
?>