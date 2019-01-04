<?php 

	$servidor 	= 	"localhost";
	$usuario  	=	"root";
	$contraseña	=	"";
	$db			=	"prueba";
	
	$con = mysqli_connect($servidor,$usuario,$contraseña,$db);

	if (!$con){

 		echo "Error: No se puede conectar a MYSQL" PHP_EOL;

 		exit;

	}

	$errors = array();
	



?>