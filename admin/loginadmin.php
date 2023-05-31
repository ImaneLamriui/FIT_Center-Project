<?php

session_start();

include '../PHP/conexion.php';

$email = $_POST['Correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// DESINCRPTAR CONTRASEÑA
$contrasena= hash('sha512', $contrasena);

$validar_login =  $conexion->query("SELECT * FROM  usuarios WHERE Correo ='$email' AND confirmado = 'si' AND contrasena ='$contrasena'");

if($validar_login->fetchColumn()> 0) {
    $_SESSION['usuario'] = $usuario;
header ("location:dashboard_admin.php");}

else {
    echo
    '<script>
    alert("Usuario no existe por favor verefique nuevamente!");
    window.location.assign("loginadmin.php")
     </script>';
   }