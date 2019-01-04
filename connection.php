<?php
    //$con = mysql_connect("variedadesselzoicom.fatcowmysql.com","servicreditosrh","Servi1234");
    //$con = mysql_connect("localhost","id3680779_prestamo","Presta1234");

   //$con = mysqli_connect("localhost", "root", "Itzy2409", "prestamo");;
$con = mysqli_connect("localhost", "root", "", "prestamo");
   	//$con = mysqli_connect("mysql.hostinger.com", "u696063629_prest", "Itzy2409", "u696063629_prest");;

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
