<?php
/*Iniciamos sesión*/
session_start();
/*Incluimos las librerias que contienen funciones*/
require_once('connections/connection.php');
/*Validamos que la variable option este definida para llamar a una función en específico*/
if (isset($_POST['option'])) {
    $option = $_POST['option'];
    switch ($option) {
        case 'verify_credentials':
            verify_credentials();
            break;      
        case 'olvido_contrasenia':
        	olvido_contrasenia();                  
        	break;
    }
}

/*Función para verificar credenciales*/
function verify_credentials() {  
	$error = "";  
    $usuario = $_POST["us"];         
    $password = $_POST["pw"];    
   /* $arr_app="";
    $arr_menu=array();*/

    if($usuario == "")
	{
		$error ="Ingrese su usuario.";
		$success = 2;
	}
	else
	{
		 if($password == "")
	 	{
	 		$error='Ingrese su Contraseña';
			$success = 2;	
	 	}
	 	else
	 	{	
	 		$q = "SELECT COUNT(`user`) 
                FROM `users` 
                WHERE `user` = '$u' 
                AND `pass` = '$p' 
                AND (status = '0' OR status = '2')
                ";

	 		//error_log($query);

			$result=mysqli_query($con, $q);
			$num=mysqli_fetch_array($result);
            
            $us =   $num['COUNT(`user`)'];
				
			//Si el resultado de la busqueda no es satisfactorio asignamos el valor false a la variable validado.
				//eerror_log($query);
			if($us == "0")	{
                
                $validado=false;
            }

				
				
			if ($validado == false)
			{
				$error = 'Usuario o Contraseña Inválidos.';
				$success = 2;			
			}
			else
			{	
				//Si el valor de la variable es true guardarmos los datos del array en una variable de sesion para ser utilizados posteriormente.
				$query="SELECT id_permiso FROM permisos WHERE id_profile=".$profile." AND estatus = 1 LIMIT 1";						
				$result=mysql_query($query);
				$row=mysql_fetch_array($result);
				if($row["id_permiso"] == "")
				{
					$error = 'Usuario '.$usuario.' no cuenta con los permisos para acceder';
					$success = 2;					
				}			
				else
				{	
					$query = "SELECT * FROM permisos WHERE id_profile=".$profile." AND tipo = 1 AND estatus = 1 ORDER BY id_permiso";
						
					$_SESSION["arr_datos"]=$arr;
					$_SESSION["salir"]=false;
					$_SESSION["arr_menu"] = $arr_menu;
					$_SESSION["arr_apps"] = $arr_app;				
					$success = 1;
				}
			}
		}
	}	
	$jsondata['success'] = $success;               
    $jsondata['error'] = $error;
    /*Convertimos a json*/
    echo json_encode($jsondata);   
}
?>