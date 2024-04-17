<?php
    include "conexion.php";
    $email =$_POST['Correo'];
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from usuarios 
        where Correo='$email' 
        and codigo='$codigo' 
        ");
       
    if( $res->fetchColumn() > 0){
   
        $conexion->query("update usuarios set confirmado = 'si' where Correo = '$email'");
        echo 'TODO CORRECTO  ya puedes <a href="indexLogin.php">Iniciar sesion </a>';
    }else{
        echo "codigo invalido";
    }
?>