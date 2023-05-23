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



if ($_GET){
$cod = $_GET['Cod'];
$reserva = $conexion->prepare("DELETE  FROM reservas  WHERE Cod_clase='$cod'");
$borrar = $reserva->execute();
echo "Reserva anulada!";}
else {
  echo"la reserva no ha sido eliminada!";
}
       ?>


