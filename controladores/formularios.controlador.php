<?php

Class ControladorFormularios{

	//registro
	static public function ctrRegistro(){

		if (isset($_POST["registroNombre"])) {
			//return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>";

			return "ok";
		}

	}
}
