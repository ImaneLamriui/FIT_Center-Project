<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
  <script>
  alert("Por favor debes iniciar sesión");
  window.location = "indexLogin.php";
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
  <meta name="author" content="Imane Lamriui El Oumri">
  <meta name="description" content="Página de detalle de reserva de FIT">
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
  <!-- datatable css-->
  <link rel="stylesheet" href="../Style/datatables.min.css">
  <!-- clockpicker-botstrap -->
  <link rel="stylesheet" href="../Style/bootstrap-clockpicker.css">
  <!-- fullcalendar -->
  <link rel="stylesheet" href="../Style/main.css">


  <!-- ****************SCRIPT**************** -->

  <!-- JQUERY -->
  <script type="text/javascript" src="../JS/jquery-3.6.4.min.js"></script>
  <!-- -pooper -->
  <script src="../JS/popper.min.js"></script>
  <!-- Bootstrap script-->
  <script src="../JS/bootstrap.min.js"></script>
  <!-- datatable -->
  <script src="../JS/datatables.min.js"></script>
  <!-- bootstrap clockpicker -->
  <script src="../JS/bootstrap-clockpicker.js"></script>
  <!-- moment -->
  <script src="../JS/moment-with-locales.js"></script>
  <!-- fullcalendar -->
  <script src="../JS/main.js"></script>

</head>

<body style="background: #E4E4E4;">
  <!-- BARRA DE NAVEGACIÓN-->

  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="dropdown d-sm-block d-lg-none d-md-none">
        <h3 style="color: #242e48; border-radius:5px;padding:5px 10px;
            font-weight:400;font-size:1.2rem;" class="dropdown-toggle" type="" data-bs-toggle="dropdown" aria-expanded="false">
          <?php

          echo "<i class='bi bi-person-circle'></i>" . " " . 'Hola' . "\n" . $_SESSION['usuario']; ?>
        </h3>
        <ul class="dropdown-menu" style="border: none; padding:0px;background:#f5f6f7; cursor:pointer;">
            <li> <a href="cambiarContrasenia.php" class="dropdown-item">Cambiar contraseña</a></li>
            <li> <a href="editarPerfil.php" class="dropdown-item">Editar perfil</a></li>
            <li> <a href="indexPerfil.php" class="dropdown-item">Inicio perfil</a></li>
            <li> <a href="cerrarSesion.php" class="dropdown-item cerrar-sesion" style="text-decoration: none
            ;">Cerrar sesión</a></li>
          </ul>
      </div>

      <!--  logo + lista de nav ul + button iniciar sesion para lg -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="">
          <p id="" class="logo-cabecera d-flex d-sm-none d-none d-md-block">Fit</p>
        </a>


        <ul class="navbar-nav d-flex justify-content-lg-center align-items-lg-center justify-content-sm-start align-items-sm-start">

          <li class="nav-item">
            <a class="nav-link me-3 lang" key="home" style="color: #7a7a7a;
            font-weight:400;" href="../index.php">INICIO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 lang" key="actividades" style="  color: #7a7a7a;
            font-weight:400;" href="indexTable.php">ACTIVIDADES</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link me-3 lang" key="reservas" style="  color: #7a7a7a;
              font-weight:400;" href="indexLogin.php">RESERVAS</a> -->


            <a href="" data-bs-target="#Reservas" data-bs-toggle="modal" class="nav-link me-3 lang" key="reservas" style="  color: #7a7a7a;
              font-weight:400;">RESERVAS</a>

            <?php
            include 'conexion.php';


            //Modal 
            echo " <div class='modal fade' id='Reservas' data-bs-backdrop='static' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>";
            echo " <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>";
            echo " <div class='modal-content'>";
            echo " <div class='modal-header'>";
            echo "<h5 style='color:#0a4ba9; font-weight:600'>Hola  $_SESSION[usuario] , estas son sus reservas:</h5>";
            echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
            echo "</div>";
            echo "  <div class='modal-body'>";
            echo "   <div>";
        

            $reserva = $conexion->query("SELECT * FROM reservas p INNER JOIN usuarios c ON p.Id_usuario = c.Id  WHERE  usuario ='$_SESSION[usuario]'");
            $resultado1 =  $reserva->setFetchMode(PDO::FETCH_ASSOC);
            $resultado1 =  $reserva->fetchAll();
            // echo json_encode($resultado1);
            for ($i = 0; $i <= count($resultado1) - 1; $i++) {


              $horareserva[] = substr($resultado1[$i]['Hora_reserva'], 0, 5);
              $fechareserva[] = $resultado1[$i]['Fecha_reserva'];
              //aqui

              $date = date_create($fechareserva[$i]);
              $date2[] = date_format($date, "d-m-Y");
              //aqui
              $codclase[] = $resultado1[$i]['Cod_clase'];


              $clase =  $conexion->query("SELECT Nombre  FROM clases WHERE Cod = '$codclase[$i]'");
              $resultado2 =  $clase->setFetchMode(PDO::FETCH_ASSOC);
              $resultado2 =  $clase->fetchAll();
              $nombreclase[] = $resultado2[0]['Nombre'];

              $clase =  $conexion->query("SELECT sala  FROM clases WHERE Cod = '$codclase[$i]'");
              $resultado2 =  $clase->setFetchMode(PDO::FETCH_ASSOC);
              $resultado2 =  $clase->fetchAll();
              $sala[] = $resultado2[0]['sala'];

              $clase =  $conexion->query("SELECT PVP  FROM clases WHERE Cod = '$codclase[$i]'");
              $resultado2 =  $clase->setFetchMode(PDO::FETCH_ASSOC);
              $resultado2 =  $clase->fetchAll();
              $Precio[] = $resultado2[0]['PVP'];


             
              echo "<div style='font-weight: bolder; font-size: 1rem; color: #242e48;margin-bottom: 1rem;'>Reserva en la clase de $nombreclase[$i] :<br></div>";
            
              echo "<div style='font-weight: bold; font-size: 1rem;'>Horario: $horareserva[$i] horas</div>";
              echo "<div  style='font-weight: bold; font-size: 1rem;'>Fecha: $date2[$i]</div>";
              echo "<div  style='font-weight: bold; font-size: 1rem;'>Clase: $nombreclase[$i]</div>";
              echo "<div  style='font-weight: bold; font-size: 1rem;'>Code: $codclase[$i]</div>";
              echo "<div  style='font-weight: bold; font-size: 1rem;'>Precio: $Precio[$i]</div>";
              echo "<div  style='font-weight: bold; font-size: 1rem;'>Sala: $sala[$i]</div>";
            }
            echo " </div>";
            echo " </div>";
            echo " <div class='modal-footer'>";
            echo "  <button type='button' style='box-shadow: 1px 3px 1px 3px #000e31;padding: 0.3rem; width: 7.5rem;font-size: 1rem; border-radius: 50px;background: #0a4ba9;' class='boton-consulta-reserva text-white' data-bs-dismiss='modal'>Cerrar</button>";
            echo " <a href='detailsClass.php' style='text-decoration:none;' class='boton-consulta-reserva text-white'><button  style=' box-shadow: 1px 3px 1px 3px #000e31; padding: 0.3rem; width: 7.5rem;font-size: 1rem;border-radius: 50px;background: #0a4ba9;' type='button' class='text-white'>Modificar</button></a>";
            echo " <a href='borrarReserva.php?Cod= $codclase[$i]'  style='text-decoration:none;' class='text-white boton-consulta-reserva'><button  style=' box-shadow: 1px 3px 1px 3px #000e31; padding: 0.3rem; width: 7.5rem;font-size: 1rem;border-radius: 50px;background: #0a4ba9;' type='button' >Anular</a></button>";
            echo " </div>";
            echo " </div>";

            echo " </div>";
            ?>


          </li>
          <li class="nav-item">
            <a class="nav-link me-3 lang" key="contacto" style="  color: #7a7a7a;
              font-weight:400;" href="#contacto">CONTACTO</a>
          </li>

        </ul>

        <div class="lang-menu  d-flex">
          <div id="es" style="color: #7a7a7a;
             font-weight:400; font-size: 1.2rem; " class="selected-lang es translate"><i class="fa-solid fa-caret-down fa-sm" style="position: absolute; top: 16px; left:38px"></i>
          </div>

          <ul class="ul">

            <li class="li"><a id="us" href="" class="us translate"></a></li>
            <li class="li"><a id="fr" href="" class="fr translate"></a></li>
          </ul>
        </div>


        <div class="dropdown d-sm-none lg-block d-md-block d-none">
          <h3 style="color: #242e48; border-radius:5px;padding:5px 10px;
            font-weight:400;font-size:1.2rem;cursor:pointer;" class="dropdown-toggle" type="" data-bs-toggle="dropdown" aria-expanded="false" class="hola-user">
            <?php
            echo "<i class='bi bi-person-circle'></i>" . " " . 'Hola' . "\n" . $_SESSION['usuario']; ?>
          </h3>
          <ul class="dropdown-menu" style="border: none; padding:0px;background:#f5f6f7; cursor:pointer;">
            <li> <a href="cambiarContrasenia.php" class="dropdown-item">Cambiar contraseña</a></li>
            <li> <a href="editarPerfil.php" class="dropdown-item">Editar perfil</a></li>
            <li> <a href="indexPerfil.php" class="dropdown-item">Inicio perfil</a></li>
            <li> <a href="cerrarSesion.php" class="dropdown-item cerrar-sesion" style="text-decoration: none
            ;">Cerrar sesión</a></li>
          </ul>
        </div>


      </div>

  </nav>

  <!-- PARTE DE LOS DIVS DE DETALLES -->

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 col-12 d-flex justify-content-start align-items-center">
        <?php

        $Fecha2 = $_POST['Fecha'];
        $date = date_create($Fecha2);
        $date3 = date_format($date, "d-m-Y");

        if ($_POST) {

          echo "<h5 class='navegacion' style='color: #FD7E14;font-weight: 900;'>Clases disponibles el" . " " .   $date3 . ":" . "<br>" . "</h5>";
        } else {
          echo "<h5 class='navegacion' style='color: #FD7E14;font-weight: 900;'>Clases disponibles el" . " " . date("d") . "\n" . "de" . "\n" . date("m") . "\n" . "de" . "\n" . date("Y") . ":" . "<br>" . "</h5>";
        }

        ?>
      </div>
      <div class="col-md-6 col-12 gap-2 d-flex justify-content-end align-items-center">

        <!-- calendario de reserva -->


        <div class="input-group input-group-static my-3 d-sm-block d-md-block d-lg-none">
          <form class="" action="" method="post">
            <label style="display:block; overflow:hidden;"></label>
            <input type="date" id="fecha" name="Fecha" min="" max="" step="1">
            <input type="submit" name="Insertar" class="" style="margin-left:20px; margin-top:20px; padding: 2px;" value="Seleccionar">
          </form>
        </div>



        <!-- DESPLEGABLE PARA FILTRAR LOS DETALLES POR CLASES -->


        <div class='dropdown'>

          <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded='false'>
            Filtrar por clase
          </button>
          <ul class="dropdown-menu" style="border: none; background: #f5f6f7; width: 25px;">

            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_crosstraining'>Cross Training </a></li>
            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_funcional'>Funcional</a></li>
            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_gap'>GAP</a></li>
            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_jumpandboxjumps'>Jump & Box Jumps</a></li>
            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_musculacion'>Musculación</a></li>
            <li><a class='dropdown-item' href='detailsClass.php?action=detalle_yoga'>Yoga</a></li>
          </ul>

        </div>
        <div class="">
          <button class="btn btn-success"><a href="indexPerfil.php" style="text-decoration: none; color:white"> Volver </a> </button>
        </div>
      </div>
    </div>

    <div class="row mt-1">
      <div class="col-md-8 col-12">
        <?php
        include 'conexion.php';

       

        //FICHERO filtrandoporclase 
        $action = $_GET['action'];
        if ($_POST['Fecha']) {
          switch ($action) {

            case 'detalle_crosstraining':

              $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Cross Training'  AND CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date) ");
              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();

              break;

            case 'detalle_funcional':
              $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Funcional' AND CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date)");
              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();

              //echo json_encode($resultado);
              break;
            case 'detalle_gap':
              $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'GAP'  AND CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date)");

              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();
              //echo json_encode($resultado);
              break;
            case 'detalle_jumpandboxjumps':
              $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Jump & Box Jumps' AND CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date) ");

              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();

              // echo json_encode($resultado);
              break;
            case 'detalle_musculacion':
              $datos = $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Musculacion' AND CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date)");

              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();


              //echo json_encode($resultado);
              break;
            case 'detalle_yoga':
              $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Yoga'  AND  CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date)");

              $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
              $resultado = $datos->fetchAll();

              // echo json_encode($resultado);
              break;
            default:
              //code
              break;
          }
        } else   switch ($action) {

          case 'detalle_crosstraining':

            $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Cross Training'  AND CAST(fechahorainicio AS date) = CAST(CURDATE() AS date) ");
            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();

            break;

          case 'detalle_funcional':
            $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Funcional' AND CAST(fechahorainicio AS date) = CAST(CURDATE() AS date)");
            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();

            //echo json_encode($resultado);
            break;
          case 'detalle_gap':
            $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'GAP'  AND CAST(fechahorainicio AS date) = CAST(CURDATE() AS date)");

            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();
            //echo json_encode($resultado);
            break;
          case 'detalle_jumpandboxjumps':
            $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Jump & Box Jumps' AND CAST(fechahorainicio AS date) = CAST(CURDATE() AS date) ");

            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();

            // echo json_encode($resultado);
            break;
          case 'detalle_musculacion':
            $datos = $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Musculacion' AND CAST(fechahorainicio AS date) = CAST(CURDATE() AS date)");

            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();


            //echo json_encode($resultado);
            break;
          case 'detalle_yoga':
            $datos =  $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre  where titulo = 'Yoga'  AND  CAST(fechahorainicio AS date) = CAST(CURDATE() AS date)");

            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado = $datos->fetchAll();

            // echo json_encode($resultado);
            break;
          default:
            //code
            break;
        }


        if ($_POST['Fecha']) {

          //CONSULTA1 POR DEFECTO DA RESULTADOS  SEGÚN LA FECHA DE HOY
          $datos = $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre where CAST(fechahorainicio AS date) = CAST('$_POST[Fecha]' AS date)");


          $ep =  $datos->setFetchMode(PDO::FETCH_ASSOC);
          $ep =  $datos->fetchAll();
        } else {

          //CONSULTA2 POR SI SE MANDA UNA FECHA, estas dos consultas se intercambian con el DESPLEGABLE DE LOS DETALLES
          $datos = $conexion->query("select * from sesiones p INNER JOIN clases c ON p.titulo = c.Nombre where CAST(fechahorainicio AS date) = CAST(CURDATE() AS date)");

          //ESTA CONSULTA PARA SELECCIONAR CORREO Y USUARIO DEL USUARIO PARA CONFIRMAR RESERVA

          $ep =  $datos->setFetchMode(PDO::FETCH_ASSOC);
          $ep =  $datos->fetchAll();
        }

        for ($i = 0; $i <= count($ep) - 1; $i++) {

          //action solo selecciona los dos clases al dia que hay de la misma actividad

          if (($action) && ($i <= count($resultado) - 1)) {
            $id[] = $resultado[$i]['id'];
            $titulo[] = $resultado[$i]['titulo'];
            $sala[] = $resultado[$i]['sala'];
            $fechahorainicio[] = $resultado[$i]['fechahorainicio'];
            $fechahorafin[] = $resultado[$i]['fechahorafin'];
            $plazasreservadas[] = $resultado[$i]['plazasreservadas'];
            $plazasdisponibles[] = $resultado[$i]['plazasdisponibles'];
            $Precio[] = $resultado[$i]['PVP'];
            $Fecha[] = substr($resultado[$i]['fechahorainicio'], 0, 10);


            //  $date=date_create($Fecha[$i]);
            //  $date2[]=date_format($date, "d-m-Y");



            //abajo $date2[$i]

            $Horarioinicio[] = substr($resultado[$i]['fechahorainicio'], 11, 5);
            $Horariofin[] = substr($resultado[$i]['fechahorafin'], 11, 5);

            echo "<div class='rowdetails row m-5 border border-3 rounded-2' style='background:#f5f6f7; width: 100%; color: #0A4BA9; height:150px; box-shadow: 2px 3px 3px 2px #0A4BA9;'>";

            echo "<div  class='list p-1 col-12 d-flex justify-content-between align-items-center fc-event' data-titulo ='$titulo' data-fechahorainicio=' $fechahorainicio' data-fechahorafin ='$fechahorafin'>";
            echo "<ul class='ul-data'>";


            echo "<li> Clase: <i style= 'font-style: normal;' >$titulo[$i]</i> |  Fecha:  <i style= 'font-style: normal;'>$Fecha[$i]</i>  |  Cod_sesión:  <i style= 'font-style: normal;'>$id[$i]</i> </li>";

            echo "<li> Sala:$sala[$i] |  Plazas reservadas: <i style= 'font-style: normal;' > $plazasreservadas[$i]</i> /15  | Plazas disponibles: <i style= 'font-style: normal;' >$plazasdisponibles[$i]</i>/15</li>";

            echo "<li>Horario: de <i style= 'font-style: normal;' >$Horarioinicio[$i]</i> a  <i style= 'font-style: normal;' >$Horariofin[$i]</i>  | Precio: $Precio[$i] </li>";

            echo "</ul>";


            echo "<button type='submit' class='btn btn-primary botonreservar' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='datosReserva()'>Inscribirse</button>";


            // PARTE Modal 

            echo "<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'>";
            // aria-labelledby='staticBackdropLabel' aria-hidden='true'
            echo " <div class='modal-dialog'>";
            echo " <div class='modal-content'>";
            echo " <div class='modal-header'>";
            echo " <h1 class='modal-title fs-10' id='staticBackdropLabel'>Reserva Online</h1>";
            echo "<button type='button'class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
            echo " </div>";
            //entre estas dos etiquetas <div class='modal-body'> y  </div>"; echo "<div class='modal-footer'>";
            echo "  <div class='modal-body' style='margin:auto; width:400px; border: solid #0a4ba9 1px;border-radius:5px'>";

            echo "<input type='hidden' name='id' id='Id'>";
            echo "<input type='hidden' name='plazasreservadas' id='plazasreservadas'>";
            echo "<input type='hidden' name='plazasdisponibles' id='plazasdisponibles'>";
            echo "<div class='row'>";

            echo "<div class='form-group col-md-6'>";
            echo "<label for='' class='mt-2'>Titulo de la clase</label>";
            echo "<input type='text' id='title' class='form-control' placeholder='' name='titulo'>";
            echo "</div>";
            echo "<div class='form-group col-md-6'>";
            //PARA LA TABLA RESERVAS , TAMBIÉN ME PERMITIRÁN SELECCIONAR EL ID DE LA SESION JUNTO A LA FECHA DE INICIO
            echo "<label for='' class='mt-2'>fecha</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            $date = date_create($Fecha[$i]);
            $date3 = date_format($date, "d-m-Y");
            echo "<input type='text' id='fecha' name='fecha' value='$date3' class='form-control'>";
            echo "</div>";
            echo "</div>";

            echo "</div>";

            echo "<div class='row'>";

            echo "<div class='form-group col-md-6' id='TituloHoraInicio'>";
            echo "<!-- PRA LA TABLA RESERVAS -->";
            echo "<label for='' class='mt-2'>Hora de inicio</label>";
            echo "<div class='input-group clockpicker' data-autoclose='true'>";
            echo "<input type='text' id='horainicio' name='horainicio' class='form-control' autocomplete='off'>";
            echo "</div>";
            echo "</div>";


            echo "<div class='form-group col-md-6' id='TituloHoraFin'>";
            echo "<label for='' class='mt-2'>Hora de fin</label>";
            echo "<div class='input-group clockpicker' data-autoclose='true'>";
            echo "<input type='text' id='horafin' name='horafin' class='form-control' autocomplete='off'>";
            echo "</div>";
            echo "</div>";

            echo "</div>";


            echo "<div class='form-row'>";
            echo "<label for='' class='mt-2'></label>";
            echo "<input type='hidden' value='' id='colorfondo' class='form-control' style='height:36px;'>";
            echo "</div>";


            echo "<div class='form-row'>";
            echo "<div class='form-group col-md-12'>";
            // AQUI ME A PERMITIR EXTRAER EL ID DEL USUARIO PARA INSERTARLO EN LA TABLA RESERVAS 
            echo "<label for='' class='mt-2'>Introduce tu nombre de usuario:</label>";
            echo "<input type='text' id='usuario' name='usuario' value='$_SESSION[usuario]' class='form-control' placeholder='usuario' required>";
            echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
            echo "<div class='form-group col-md-6'>";
            echo "<label for='' class='mt-2'>Teléfono:</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            echo "<input type='text' id='telefono' name='telefono' placeholder='Telefono' class='form-control'>";
            echo "</div>";
            echo "</div>";
            // AQUI EXTRAEMOS COD CLASE 
            echo "<div class='form-group col-md-6' id=''>";
            echo "<label for='' class='mt-2'>Clase:</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            echo "<input type='text' id='clase' name='clase' class='form-control' autocomplete='off'  placeholder='Clase' required>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            // Y AQUI EL CORREO ELECTRÓNICO 
            echo "<div class='form-row'>";
            echo "<div class='form-group col-md-12'>";
            echo "<label for='' class='mt-2'>Correo Electrónico:</label>";
            echo "<input type='text' id='correoelectronico' name'correoelectronico' value='' class='form-control' placeholder='correo Electronico' required>";
            echo "</div>";
            echo "</div>";

            echo "<p class='text-center mt-5'><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'><a id='botonvolver'></a>
            Volver</button>
            <button type='button' class='btn btn-primary' id='botonconfirmar'>Confirmar</button/></p>";

            echo "</div>";

            echo "<div class='modal-footer'>";
            echo " </div>";

            echo "</div>";

            echo " </div>";
            echo " </div>";
            echo " </div>";


            echo "</div>";
          }

          //fin fichero filtrando por clase

          // $fechahoy = substr(date('Y-m-d h:i:sa'), 0, 10) . '<br>';
          // echo "fecha hoy " . $fechahoy;
          // $fechafutura = '2023-06-08';

          // $fechahoy = substr(date('Y-m-d h:i:sa'), 0, 10);
          // echo "fecha hoy " . $fechahoy;
          // for ($i = 0; $i <= count($ep) - 1; $i++) {



          // Not action, se selecciona todas y las clases  que hay en el mismo dia
          else if (!$action) {
            $id[] = $ep[$i]['id'];
            $titulo[] = $ep[$i]['titulo'];
            $sala[] = $ep[$i]['sala'];
            $fechahorainicio[] = $ep[$i]['fechahorainicio'];
            $fechahorafin[] = $ep[$i]['fechahorafin'];
            $plazasreservadas[] = $ep[$i]['plazasreservadas'];
            $plazasdisponibles[] = $ep[$i]['plazasdisponibles'];
            $Precio[] = $ep[$i]['PVP'];
            // $Fecha = CURDATE();
            $Fecha[] = substr($ep[$i]['fechahorainicio'], 0, 10);

            //  $date=date_create($Fecha[$i]);
            //  $date2[]=date_format($date, "d-m-Y");





            $Horarioinicio[] = substr($ep[$i]['fechahorainicio'], 11, 5);
            $Horariofin[] = substr($ep[$i]['fechahorafin'], 11, 5);




            echo "<div class='rowdetails row m-3 border border-3 rounded-2' style='background:#f5f6f7; width:100%; color: #0A4BA9; height:150px; box-shadow: 2px 3px 3px 2px #0A4BA9;'>";


            echo "<div  class='list p-1 col-12 d-flex justify-content-between align-items-center fc-event' data-titulo ='$titulo' data-fechahorainicio=' $fechahorainicio' data-fechahorafin ='$fechahorafin'>";
            echo "<ul class='ul-data'>";


            echo "<li> Clase: <i style= 'font-style: normal;' >$titulo[$i]</i> |  Fecha:  <i style= 'font-style: normal;'> $Fecha[$i]</i> |  sesión:  <i style= 'font-style: normal;'> $id[$i]</i>";

            echo "<li> Sala:$sala[$i] |  Plazas reservadas: <i style= 'font-style: normal;' > $plazasreservadas[$i]</i> /15  | Plazas disponibles: <i style= 'font-style: normal;' >$plazasdisponibles[$i]</i>/15</li>";

            echo "<li>Horario: de <i style= 'font-style: normal;' >$Horarioinicio[$i]</i> a  <i style='font-style: normal;' >$Horariofin[$i]</i>  | Precio: $Precio[$i] </li>";

            echo "</ul>";

            if ($plazasreservadas[$i] == 15) {
              echo "<p  class='rounded-top border border-3' style='padding: 10px;font-weight:800;'>Clase llena</p>";
            } else  if ($plazasreservadas[$i] == 14) {
              echo "<p  class='rounded-top border border-3 full-class' style='padding: 10px;font-weight:800;'>¡Una plaza libre!</p>";
            } else {
              echo "<p  class='rounded-top border border-3 full-class' style='padding: 10px;font-weight:800;'>Disponible</p>";
            }


            //    PARTE Modal 
            echo "<div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1'>";
            // aria-labelledby='staticBackdropLabel' aria-hidden='true'
            echo " <div class='modal-dialog'>";
            echo " <div class='modal-content'>";
            echo " <div class='modal-header'>";
            echo " <h1 class='modal-title fs-10' id='staticBackdropLabel'>Reserva Online</h1>";
            echo "<button type='button'class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
            echo " </div>";
            //entre estas dos etiquetas <div class='modal-body'> y  </div>"; echo "<div class='modal-footer'>";
            echo "  <div class='modal-body' style='margin:auto; width:400px; border: solid #0a4ba9 1px;border-radius:5px'>";

            echo "<input type='hidden' name='id' id='Id'>";
            echo "<input type='hidden' name='plazasreservadas' id='plazasreservadas'>";
            echo "<input type='hidden' name='plazasdisponibles' id='plazasdisponibles'>";
            echo "<div class='row'>";

            echo "<div class='form-group col-md-6'>";
            echo "<label for='' class='mt-2'>Titulo de la clase</label>";
            echo "<input type='text' id='title' class='form-control' placeholder='' name='titulo'>";
            echo "</div>";
            echo "<div class='form-group col-md-6'>";
            //PARA LA TABLA RESERVAS , TAMBIÉN ME PERMITIRÁN SELECCIONAR EL ID DE LA SESION JUNTO A LA FECHA DE INICIO
            echo "<label for='' class='mt-2'>fecha</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            echo "<input type='text' id='fecha' name='fecha' class='form-control'>";
            echo "</div>";
            echo "</div>";

            echo "</div>";

            echo "<div class='row'>";

            echo "<div class='form-group col-md-6' id='TituloHoraInicio'>";
            echo "<!-- PRA LA TABLA RESERVAS -->";
            echo "<label for='' class='mt-2'>Hora de inicio</label>";
            echo "<div class='input-group clockpicker' data-autoclose='true'>";
            echo "<input type='text' id='horainicio' name='horainicio' class='form-control' autocomplete='off'>";
            echo "</div>";
            echo "</div>";


            echo "<div class='form-group col-md-6' id='TituloHoraFin'>";
            echo "<label for='' class='mt-2'>Hora de fin</label>";
            echo "<div class='input-group clockpicker' data-autoclose='true'>";
            echo "<input type='text' id='horafin' name='horafin' class='form-control' autocomplete='off'>";
            echo "</div>";
            echo "</div>";

            echo "</div>";


            echo "<div class='form-row'>";
            echo "<label for='' class='mt-2'></label>";
            echo "<input type='hidden' value='' id='colorfondo' class='form-control' style='height:36px;'>";
            echo "</div>";


            echo "<div class='form-row'>";
            echo "<div class='form-group col-md-12'>";
            // AQUI ME A PERMITIR EXTRAER EL ID DEL USUARIO PARA INSERTARLO EN LA TABLA RESERVAS 
            echo "<label for='' class='mt-2'>Introduce tu nombre de usuario:</label>";
            echo "<input type='text' id='usuario' name='usuario' class='form-control' placeholder='usuario'  required>";
            echo "</div>";
            echo "</div>";

            echo "<div class='row'>";
            echo "<div class='form-group col-md-6'>";
            echo "<label for='' class='mt-2'>Teléfono:</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            echo "<input type='text' id='telefono' name='telefono' placeholder='Telefono' class='form-control'>";
            echo "</div>";
            echo "</div>";
            // AQUI EXTRAEMOS COD CLASE 
            echo "<div class='form-group col-md-6' id=''>";
            echo "<label for='' class='mt-2'>Clase:</label>";
            echo "<div class='input-group' data-autoclose='true'>";
            echo "<input type='text' id='clase' name='clase' class='form-control' autocomplete='off'  placeholder='Clase' required>";
            echo "</div>";
            echo "</div>";
            echo "</div>";

            // Y AQUI EL CORREO ELECTRÓNICO 
            echo "<div class='form-row'>";
            echo "<div class='form-group col-md-12'>";
            echo "<label for='' class='mt-2'>Correo Electrónico:</label>";
            echo "<input type='text' id='correoelectronico' name'correoelectronico' class='form-control' placeholder='correo Electronico' required>";
            echo "</div>";
            echo "</div>";


            echo "<p class='text-center mt-5'><button type='button' class='btn btn-secondary' data-bs-dismiss='modal'><a href='' id='botonvolver'></a>
            Volver</button>
            <button type='button' class='btn btn-primary' id='botonconfirmar'>Confirmar</button/></p>";

            echo "</div>";

            echo "<div class='modal-footer'>";
            echo " </div>";

            echo "</div>";

            echo " </div>";
            echo " </div>";
            echo " </div>";

            echo "</div>";
          }
        }

        ?>

      </div>
      <div class="col-md-4 col-12 mt-5 d-sm-none d-md-none d-lg-block d-none">

        <div class="input-group input-group-static my-3">
          <form class="" action="" method="POST">
            <label style="display:block; overflow:hidden;">Fecha de reserva: </label>
            <input type="date" id="fecha" name="Fecha" min="" max="" step="1">
            <input type="submit" name="Insertar" class="" style="margin-left:20px; margin-top:20px; padding: 2px;" value="Seleccionar">
          </form>
        </div>

      </div>


    </div>
  </div>

  <!-- FOOTER -->
  <footer>
    <!-- informaciónes de privacidad con el logo -->
    <div class="row info-end mt-5">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <a class="navbar-brand" href="">
          <p id="" class="logo-cabecera d-flex d-sm-block d-md-block">Fit</p>
        </a>
        <p class="text-center copiright"><a id="home" class="FitFast_href" href=""> Fit</a> Center
          2023<br>Todos
          los derechos reservados &#169;
        </p>
      </div>
    </div>

    <div class="row politica-privacity">

      <div class="col-12 col-md-3">
        <a href="">
          <p>politica de privacidad</p>
        </a>
      </div>
      <div class="col-12 col-md-3">
        <a href="">
          <p>Politica de cookies</p>
        </a>

      </div>
      <div class="col-12 col-md-3">
        <a href="">
          <p>Condiciones de Uso</p>
        </a>

      </div>
      <div class="col-12 col-md-3">
          <a href="" class="" data-bs-toggle="modal" data-bs-target="#bajaUsuario">
            <p>Darse de baja</p>
          </a>

          <!-- Modal -->
          <div class="modal fade" id="bajaUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Si quiere darse de baja de nuestro sistema por favor pulse el siguiente botón.</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="bajaUsuario.php" method="POST">
                  <input type="submit" value="Confirmar" name= "darseDeBaja" class="btn btn-secondary mt-5 p-2 text-light" style="width:100px; text-decoration: none;"></form>
                  <!-- guion de baja de usuario SI LA SESION HA SIDO INICIADA EXITOSAMENTE ENTONCES SE BORRA EL USUARIO DE LA TABLA DE USUARIOS -->
                  <?php ?>

                </div>
                <div class="modal-footer">
                  <button style="font-size:1rem;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>

                </div>
              </div>
            </div>
          </div>

        </div>
    </div>


  </footer>

  <script>
    $('.clockpicker').clockpicker();

    //este codigo funciona para extraer los datos del div clicado

    function datosReserva() {

      const divsClassesElement = document.getElementsByClassName('list')


      for (var j = 0; j <= divsClassesElement.length; j++) {

        divsClassesElement[j].addEventListener('click', function() {

          $('#plazasreservadas').val(this.getElementsByTagName('li')[1].getElementsByTagName('i')[0].innerHTML)
          $('#plazasdisponibles').val(this.getElementsByTagName('li')[1].getElementsByTagName('i')[1].innerHTML)
          $('#Id').val(this.getElementsByTagName('li')[0].getElementsByTagName('i')[2].innerHTML)
          $('#title').val(this.getElementsByTagName('li')[0].getElementsByTagName('i')[0].innerHTML)
          $('#fecha').val(this.getElementsByTagName('li')[0].getElementsByTagName('i')[1].innerHTML)
          $('#horainicio').val(this.getElementsByTagName('li')[2].getElementsByTagName('i')[0].innerHTML)
          $('#horafin').val(this.getElementsByTagName('li')[2].getElementsByTagName('i')[1].innerHTML)
          $('#clase').val(this.getElementsByTagName('li')[0].getElementsByTagName('i')[0].innerHTML)



          // $('#correoelectronico').val($ep2['correoelectronico'])
          // $('#usuario').val($ep2['usuario'])


        })
      }
    }

    function recuperarDatosSolicitudReserva() {
      let registro = {
        id_sesion: $('#Id').val(),
        plazasdisponibles: $('#plazasdisponibles').val(),
        plazasreservadas: $('#plazasreservadas').val(),
        titulo: $('#title').val(),
        fInicio: $('#fecha').val(),
        hInicio: $('#horainicio').val(),
        hFin: $('#horafin').val(),
        user: $('#usuario').val(),
        telefono: $('#telefono').val(),
        clase: $('#clase').val(),
        correoelectronico: $('#correoelectronico').val()
      }
      return registro;

    }


    function agregarReserva(registro) {
      $.ajax({
        type: 'POST',
        url: 'datosclases.php?action=confirmar',
        data: registro,
        success: function(msg) {
          alert("se agregarón los datos con succeso!")
        }
        //,
        // error: function(error) {
        //   alert("hubo un error al agregar el evento" + error)
        // }
      })
    }

    // limpiar el formulario
    function limpiarFormulario() {
      $('#Id').val('');
      $('#plazasdisponibles').val(),
      $('#plazasreservadas').val(),
      $('#title').val('');
      $('#fecha').val('');
      $('#horainicio').val('');
      $('#horafin').val('');
      $('#usuario').val('');
      $('#telefono').val('');
      $('#clase').val('');
      $('#correoelectronico').val('');
    }



    var registro;

    $('#botonconfirmar').click(function() {
      // let plazasInfo = recuperarEstadoPlazas();
      let datosRecuperados = recuperarDatosSolicitudReserva();
      console.log(datosRecuperados)

      if ($('#usuario').val() && $('#clase').val() && $('#telefono').val() && $('#correoelectronico').val()) {

        agregarReserva(datosRecuperados)
        console.log(datosRecuperados)
        alert("Reserva confirmada!")

        if (true) {
          // actualizarTablaReservas(datosRecuperados)
          // console.log(datosRecuperados)
          alert("datos actualizados!")
          limpiarFormulario()
        } else {
          return false;
        }

      } else {
        alert("Porfavor rellena todos los campos para cumplementar la reserva")
      }
    });


    function data() {

      let fechaDevolucion = $("#fechaDevolucion").val();
      console.log(fechaDevolucion);
    }
  </script>


</body>

</html>