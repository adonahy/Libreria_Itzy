<?php
$server = "localhost";
$usuario= "root";
$pass   = "";
$db     = "prestamos";


$con = mysqli_connect($server, $usuario, $pass, $db);

	if (!$con)
	{
		//die('Could not connect: ' . mysql_error());
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    	echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    	echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    	exit;
	}

	//mysql_select_db("id3680779_prestamo", $con);


	    $errors = array();

	    //mysqli_close($enlace);
?>