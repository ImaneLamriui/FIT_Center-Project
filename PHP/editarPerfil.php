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
  <div class='container mt-5' style='width:400px;height:800px;'>
    <h1 class='text-center text-primary m-4'>Editar perfil</h1>
    <form class='form-control p-3' action='' method='POST'>
      <?php
      include 'conexion.php';
      //SELECCIONAR LOS DATOS DEL USUARIO
      $sql = $conexion->prepare("SELECT * FROM usuarios WHERE '$_SESSION[usuario]' = usuario");
      $sql->execute();

      $detalles1 = $sql->fetchAll();

      foreach ($detalles1 as $detalle) {


        echo "<label for='text' class='mt-2'>Apellido1</label>";
        echo "<input type='text' name='Primer_Apellido' value='{$detalle['Apellido1']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";
        echo "<label for='text' class='mt-2'>Apellido2</label>";
        echo "<input type='text' name='Segundo_Apellido'  value='{$detalle['Apellido2']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";
        echo "<label for='text' class='mt-2'>Nombre</label>";
        echo "<input type='text' name='Nombre' id='nombre'  value='{$detalle['Nombre']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";
        echo "<label for='Email' class='mt-2'>Correo</label>";
        echo "<input type='email' name='Correo' id='email'  value='{$detalle['Correo']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";
        echo "<label for='usuario' class='mt-2'>Usuario</label>";
        echo "<input type='usuario' name='usuario' id='usuario'  value='{$detalle['usuario']}' class='w-100' style='padding:3px;border: solid 1px lightblue; margin-top: 3px; text-decoration: none;'>";
      ?>

        <p style="text-align:center;margin-top:30px;"><a href=""><input type='submit' class='' value='Modificar' name='Modificar' style="margin-right:10px; "></a>
          <a href='indexPerfil.php'><input type='button' class='' value='Volver' name='Volver'></a>
        </p>


        <!-- <a href = 'detallePerfil.php'><button class='text-center' style='text-decoration: none;margin: auto;display:block;margin:20px;' type='submit'>Actualizar</a></button></a> -->

      <?php
      }
      include 'conexion.php';
      //var_dump("el usuario es : " .$_SESSION['usuario']);
      //SI SE MANDAN DATOS DE LOS CAMPOS INPUT SE REENVIARÁN A LA BASE DE DATOS
      if ($_POST) {

        $detalle['Apellido1'] = $_POST['Primer_Apellido'];
        $detalle['Apellido2'] = $_POST['Segundo_Apellido'];
        $detalle['Nombre'] = $_POST['Nombre'];
        $detalle['usuario'] = $_POST['usuario'];
        $detalle['Correo'] = $_POST['Correo'];
        //var_dump($_POST);

       
        $sql2 = $conexion->prepare("UPDATE usuarios SET Apellido1 =  '$detalle[Apellido1]' , Apellido2 =  '$detalle[Apellido2]', Nombre =  '$detalle[Nombre]', Correo =  '$detalle[Correo]', usuario =  '$detalle[usuario]' WHERE usuario = '$_SESSION[usuario]'");


        $sql2->execute();
        echo "<script>alert('Usuario actualizado');</script>";
        $_SESSION['usuario'] =  $detalle['usuario'];
        echo "<script>window.location.assign('indexPerfil.php')</script>";
      } ?>
    </form>
  </div>
</body>

</html>