<?php 

class conexion{

	static public function conectar(){

		// PDO("nombre del servidor; nombre de la bd", "usuario", "contraseña")
		$link = new PDO("mysql:host=localhost;dbname=crudphpmvc", 
						"root", 
						"");

		$link->exec("set names utf8");

		return $link;
	}

}
