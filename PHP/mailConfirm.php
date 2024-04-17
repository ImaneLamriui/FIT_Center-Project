<!-- SE UTILIZÓ ESTE FICHERO PARA REALIZAR LA PRUEBA DE ENVIO DE EMAIL DE VERIFICACIÓN JUNTO AL SIMULADOR DEL SERVIDOR DE CORREOS PAPERCUT+FUNCIÓN mail() DE PHP -->
<?php
// Varios destinatarios
$para  = 'ilamriui@gmail.com' ; // atención a la coma
// $para = 'wez@example.com';

// título
$título = 'Gracias por registrar';
//codigo
$codigo = rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
<meta charset="UTF-8">
  <title>Recordatorio</title>
</head>
<body>
  <p>tu codigo de vereficacion es :</p>
  <p><a href="http://fit-center.000.pe/PHP/confirm.php?Correo='.$email.'">verificar cuenta</a></p>
  <h2>'.$codigo.'</h2> 
  
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
// $cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
// $cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
// $cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
// $cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

// Enviarlo
$enviado= false;
if (mail($para, $título, $mensaje, $cabeceras)) {
  $enviado= true;

};
?>
  
