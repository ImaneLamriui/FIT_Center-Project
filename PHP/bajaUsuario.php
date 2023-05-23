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
  die();
} ?>

<?php
include 'conexion.php';
$darsedebaja = $_POST['darseDeBaja'];
if ($_POST) {

  $sql = $conexion->prepare("DELETE FROM usuarios WHERE usuario = '$_SESSION[usuario]'");
  $sql->execute();
  echo '<script>
  alert("usuario dado de baja correctamente");
  window.location.assign("../index.php");
  </script>';
}
?>