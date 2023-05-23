<?php 
session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
  <script>
  alert("Por favor debes iniciar sesión");
  window.location = "../indexLogin.html";
  </script>
  ';
  session_destroy();

  die();}
  
include 'conexion.php';
$reserva = $conexion->query("SELECT * FROM reservas p INNER JOIN usuarios c ON p.Id_usuario = c.Id  WHERE  usuario ='$_SESSION[usuario]'");
$resultado1 =  $reserva->setFetchMode(PDO::FETCH_ASSOC);
$resultado1 =  $reserva->fetchAll();
echo json_encode($resultado1);
 ?>
             
