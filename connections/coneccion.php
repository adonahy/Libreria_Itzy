<?php 

	$servidor 	= 	"localhost";
	$usuario  	=	"root";
	$contraseña	=	"";
	$db			=	"libreria_itzy";
	
	$con = mysqli_connect($servidor,$usuario,$contraseña,$db);

	if (!$con){

 		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;

 		exit;

	}

	$errors = array();
	



?>