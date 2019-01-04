<?php 
    
    session_start();
    require 'connection.php';
    
    
    error_reporting(0);

    $usu    =   $_POST['user'];
    $pass   =   $_POST['pass'];

    if(isset($usu,$pass)){
        $u          =   $_POST['user'];
        $p          =   $_POST['pass'];

        $q = "SELECT COUNT(`user`) 
                FROM `users` 
                WHERE `user` = '$u' 
                AND `pass` = '$p' 
                AND (status = '0' OR status = '2')
                ";
        //error_log("Select login: $q");
        $query  =   mysqli_query($con,$q);
        $r      =   mysqli_fetch_array($query);
        $C      =   $r['COUNT(`user`)'];
        
        if($C > 0){
            //echo "$C";
            $_SESSION["u"] = "$u";
            $_SESSION["c"] = "$p";
            
            $security   =   'go';
        }else{
            $security   =   'stop';
        }
    }else{  
        $u  =   $_SESSION["u"];
        $p  =   $_SESSION["c"];

            $q = "SELECT COUNT(`user`) 
                    FROM `users` 
                    WHERE `user` = '$u' 
                    AND `pass` = '$p' 
                    AND (status = '0' OR status = '2')
                    ";
        
            $query  =   mysqli_query($con,$q);
            $r      =   mysqli_fetch_array($query);
            $C      =   $r['COUNT(`user`)'];
        
        if($C > 0){
            $_SESSION["u"] = "$u";
            $_SESSION["c"] = "$p";
            $security   =   'go';
        }else{
            $security   =   'stop';
        }
        
    }
?>