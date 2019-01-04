<?php
    require 'connection.php';
    date_default_timezone_set('America/Guatemala');
    $da = date("d/m/Y");
    $f  = date("m/d/Y");
    $fecha = date('Y-m-d');

    function user_exists($username){
        //$username = sanitize($username);
        return (mysqli_result(mysqli_query($con, "SELECT COUNT(`user`) FROM `users` WHERE `user` = '$username'"), 0) == 1) ? true : false;
    }

    function output_errors($errors){
        return '<ul><il>' . implode ('</il><li>', $errors) . '</il></ul>';
    }

    function register_user($u, $p, $d, $n, $a, $di, $te){
        /*nuevos datos $n, $a, $di, $te
        donde: $n = nombre, $a = Apellidos, $di = direccion, $te = Telefono
        */

        $query = mysqli_query($con, "INSERT INTO `users` (`user`, `pass`, `nombre`, `apellidos`, `direccion`, `telefono`, `date`) VALUES ('$u', '$p', '$n', '$a', '$di', '$te', '$d')");

    }

    function eliminar_user($usuario){
        //$query=mysql_query("DELETE FROM `users` WHERE `users`.`user` = '$usuario'");
        $query1 = mysqli_query($con,"UPDATE `users` SET `status`='1' WHERE  `user` = '$usuario'");
    }

    function insert_logs($f, $u, $d, $t, $u_e){
        $query=mysqli_query($con, "INSERT INTO `logs` (`id`, `fecha`, `usuario`, `descripcion`, `tabla`) VALUES (NULL, '$f', '$u', '$d \"$u_e\"', '$t')");
    }
    
    function insert_rol(){
        
    }

    function new_id(){
        $query=mysqli_query($con, "SELECT `id` FROM `planillas` ORDER BY id DESC");
        $r    =mysqli_fetch_array($query);
        
        $id   =$r['id'];
        $newid=$id + 1;
        
        return $newid;
    }

    function porcentaje($cantidad,$porciento,$decimales){
        return number_format($cantidad*$porciento/100,$decimales);
    }
        
        
    
        $queryno=mysqli_query($con, "SELECT `nombre` FROM `nombre_programa`");
        $rq =   mysqli_fetch_array($queryno);
        
        $nombre_p =   $rq['nombre'];
        
    

?>