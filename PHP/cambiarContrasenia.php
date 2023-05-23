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
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Imy Lmr">
  <meta name="description" content="Página de inicio de FIT & FAST">
  <meta name="Keywords" content="HTML, CSS,Javascript">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Perfil del usuario</title>

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- CSS -->
  <link rel="stylesheet" href="../Style/stylePage.css">
  <!-- AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- POPPINS FONT -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@500;600&family=Pathway+Extreme:wght@500&family=Poppins:wght@500&family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- FONT LOGO -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@500;600&family=Bruno+Ace+SC&family=Pathway+Extreme:wght@500&family=Poppins:wght@500&family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- Bootstrap  CSS-->
  <link rel="stylesheet" href="../Style/bootstrap.min.css">

  <!-- ****************SCRIPT**************** -->

  <!-- JQUERY -->
  <script type="text/javascript" src="../JS/jquery-3.6.4.min.js"></script>
  <!-- Bootstrap script-->
  <script src="../JS/bootstrap.min.js"></script>
  <!-- SCRIPT LANGUAGES -->
  <script src="../JS/langScripts.js"></script>


</head>

<body>
<h3 class='text-center text-primary mt-5'>Cambiar contraseña</h3>
  <div class='container mt-5' style="width:300px;">
        <form class='form-control p-3' action='' method='POST'>
               
                <label for='text'>Introduce la nueva contraseña</label>
                <input type='text' name='contrasenaNueva' class='w-100'>
                <label for='text' style="margin-top:15px;">Repite la nueva contraseña</label>
                <input type='text' name='contrasenaNueva2' class='w-100 '>
                <p style="text-align:center;margin-top: 25px;"><a href="cambiarContrasenia.php"><input type='submit' class='' value='Confirmar' name='Modificar' style="padding:3px; margin-right: 10px;"></a>
                 <a href='indexPerfil.php'><input type='button' class='' style="padding: 3px;" value='Volver' name='Volver'></a></p>

      <?php
      include 'conexion.php';
      // var_dump($_SESSION['usuario']);
      $contrase =  $conexion->query("SELECT contrasena FROM  usuarios WHERE  '$_SESSION[usuario]' = usuario'");
      $contrase->execute();
      
      $detalle = $contrase->fetchAll();
      
      foreach ($detalle as $detalles) {

        
        echo "<label for='text'>contrasena</label>";
        echo "<input type='text' name='contrasena' value='{$detalles['contrasena']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";}
    
      
 
      //var_dump("el usuario es : " .$_SESSION['usuario']);
      $contrasenaNueva =$_POST['contrasenaNueva'];
      $contrasenaNueva2 = $_POST['contrasenaNueva2'];

      if ($contrasenaNueva===$contrasenaNueva2){
       
       
        $contrasenaNueva=hash('sha512', $contrasenaNueva);
        $detalle['contrasena'] = $contrasenaNueva;
        
        //var_dump($_POST);

        $sql2 = $conexion->prepare("UPDATE usuarios SET contrasena = '$contrasenaNueva'");


        $sql2->execute();
        //echo "<script>alert('Usuario actualizado');</script>";
        
      } 
     
      ?>
    </form>
  </div>
</body>

</html>