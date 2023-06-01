<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

require_once 'conexion.php';

$primer_apellido = $_POST['Primer_Apellido'];
$segundo_apellido = $_POST['Segundo_Apellido'];
$nombre = $_POST['Nombre'];
$email = $_POST['Correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasenaConfirm = $_POST['contrasenaConfirm'];

//include 'mailConfirm.php';
// ENCRPTAR CONTRASEÑA
$contrasena = hash('sha512', $contrasena);
$contrasenaConfirm = hash('sha512', $contrasenaConfirm);

//codigo
$codigo = rand(10000,99999);

// mensaje
$mensaje = ' <p>tu codigo de vereficación es :</p>
<p><a href="http://192.168.1.48/PHP/confirm.php?Correo='.$email.'">verificar cuenta</a></p>
<h2>'.$codigo.'</h2> ';

if (isset($_POST['registrar'])){
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'fitcenter2023@gmail.com';//my email
  $mail->Password = 'secret';    //PASSWORD APP
  $mail->SMTPSecure = 'ssl';//tls
  $mail->Port = 465;//587

  $mail->setFrom('fitcenter2023@gmail.com');
  $mail->addAddress($_POST["Correo"]);
  $mail->isHTML(true);

  $mail->Subject = 'Gracias por registrar';
  $mail->Body = $mensaje;
  //$mail->send();

 

  // Enviar el correo
  $result = $conexion->query("SELECT * FROM  usuarios WHERE Correo = '$email'");

if ($result->fetchColumn() > 0) {
  echo '<script>
    alert("Este correo esta registrado anteriormente, intenta con otro correo");
    window.location.assign("indexRegister.php");
    </script>';
    exit();
 
}
  
  if  ($_POST['contrasena']){
  if (($contrasena == $contrasenaConfirm)&&($mail->send())){

    $sql = "INSERT INTO usuarios (Apellido1, Apellido2, Nombre, Correo, usuario, contrasena, codigo, confirmado) VALUES ('$primer_apellido','$segundo_apellido', '$nombre', '$email', '$usuario', '$contrasena', '$codigo', 'no')";

    // echo "<script>
    // alert('sent successfully');
    // document.location.href = 'indexRegister.php';
    // <script>";
    
    //echo"por favor revise tu email para verificar tu cuenta";
    }
    else if ($contrasena !== $contrasenaConfirm) {
      echo "<script>
      alert('Por favor verifique la contraseña')
      window.location.assign('indexRegister.php')
      </script>";
      }}
      // else if (!$mail->send())  {
      //   echo"no se pudo enviar el correo";
      // }
    
      else  if (!$_POST['contrasena']){
        echo "<script>
        alert('Por favor inserte la contraseña')
        window.location.assign('indexRegister.php')
        </script>";
      }   

if ($conexion->exec($sql)) {
  
  echo
  '<script>
  alert("por favor revise tu email para verificar tu cuenta");
  window.location.assign("indexLogin.php");

</script>';
}}
