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
  <meta name="description" content="Página principal del perfil de FIT">
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
  <script src="../JS/es.js"></script>



</head>

<body>


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

      <!--logo + lista de nav ul + button iniciar sesion para lg -->
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
            // echo"<h1 class='text-primary modal-title fs-5' id='staticBackdropLabel'> $_SESSION['usuario'] </h1>";
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



              echo "<div style='font-weight: bold; font-size: 1.5rem;'>Reserva en la clase de $nombreclase[$i] :<br></div>";
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
            echo " <a href='detailsClass.php' style='text-decoration:none;' class='boton-consulta-reserva '><button style=' box-shadow: 1px 3px 1px 3px #000e31; padding: 0.3rem; width: 7.5rem;font-size: 1rem;border-radius: 50px;background: #0a4ba9;color: white;' type='button'>Modificar</button></a>";
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


        <div class="dropdown  d-sm-none lg-block d-md-block d-none">
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


  <!-- calendario de reserva -->

  <div class=" text-center container-fluid mt-5">

    <section>
      <h1 class="titulo-perfil lang" key="titulo-reserva">Reserva tu clase</h1>
    </section>

    <!--  CLASES -->

    <div class="row">
      <div class="col-md-9 col-12 font-size-calendar-responsive">
        <div id="calendario1" style="border: 1px solid #000; padding:2px"></div>
      </div>


      <div class="col-md-3 col-12">
        <div class="" id="external-events" style="margin-bottom: 1em; height: 300px;border: 1px solid #000; overflow: auto;padding: 1em;">
          <h4 class="text-center">Clases

          </h4>
          <div id="listaeventopredefinidos">
            <?php
            include 'conexion.php';

            $datos =  $conexion->query("select Cod, Nombre, colorfondo,colortexto from clases");

            $ep =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $ep =  $datos->fetchAll();

            foreach ($ep as $fila) {


              echo "<div class='fc-event' data-titulo ='$fila[Nombre]'
         
                style='color : $fila[colortexto]; border-color : $fila[colorfondo];background-color : $fila[colorfondo];margin:10px'>
       
                 $fila[Nombre] 
       
               </div>";
            }

            ?>
          </div>
        </div>
        <button class="btn btn-success"><a href="detailsClass.php" style="text-decoration:none; color:white">Ir a los detalles <i class="fa-solid fa-arrow-right"></i></a></button>
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


    <!-- FORMULARIO DATOS AL PULSAR CLASE EN EL CALENDARIO O ES EL FORMULARIO DE RESERVA PARTE 1-->

    <div class="modal fade" id="formularioEventos" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" style="width:
            20px;" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="" id="Id">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">Titulo de la clase</label>
                <input type="text" id="title" class="form-control" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="">fecha de inicio</label>
                <div class="input-group" data-autoclose="true">
                  <input type="text" id="fechainicio" class="form-control">

                </div>
              </div>
              <div class="form-group col-md-6" id="TituloHoraInicio">
                <label for="">Hora de inicio</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="horainicio" class="form-control" autocomplete="off">

                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="">fecha de fin</label>
                <div class="input-group" data-autoclose="true">
                  <input type="" id="fechafin" class="form-control">

                </div>
              </div>
              <div class="form-group col-md-6" id="TituloHoraFin">
                <label for="">Hora de fin</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="horafin" class="form-control" autocomplete="off">

                </div>
              </div>
            </div>


            <div class="form-row">
              <label for=""></label>
              <input type="hidden" value="" id="colorfondo" class="form-control" style="height:36px;">
            </div>

          </div>
          <div class="modal-footer">

            <button type="button" id="botonreservar" class="btn btn-success"><a href="detailsClass.php" style="text-decoration:none; color:white">Ir a reservas</button>




            <button type="button" id="botoncancelar" class="btn btn-success" data-bs-dismiss="modal"><a href="" style="text-decoration:none; color:white">Cancelar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- FORMULARIO DE RESERVA PARTE 2 CONFIRMACION-->

    <div class="modal fade" id="formularioreserva" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"> x</span>
            </button>

          </div>
          <div class="modal-body">

            <input type="hidden" name="" id="Id">
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="">Titulo de la clase</label>
                <input type="text" id="title" class="form-control" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <!-- PARA LA TABLA RESERVAS , TAMBIÉN ME PERMITIRÁN SELECCIONAR EL ID DE LA SESION JUNTO A LA FECHA DE INICIO-->
                <label for="">fecha</label>
                <div class="input-group" data-autoclose="true">
                  <input type="date" id="fecha" class="form-control">

                </div>
              </div>
              <div class="form-group col-md-6" id="TituloHoraInicio">
                <!-- PRA LA TABLA RESERVAS -->
                <label for="">Hora de inicio</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="horainicio" class="form-control" autocomplete="off">

                </div>
              </div>
            </div>

            <div class="row">

              <div class="form-group col-md-6" id="TituloHoraFin">
                <label for="">Hora de fin</label>
                <div class="input-group clockpicker" data-autoclose="true">
                  <input type="text" id="horafin" class="form-control" autocomplete="off">

                </div>
              </div>
            </div>


            <div class="form-row">
              <label for=""></label>
              <input type="hidden" value="" id="colorfondo" class="form-control" style="height:36px;">
            </div>


            <div class="form-row">
              <div class="form-group col-md-12">
                <!-- AQUI ME A PERMITIR EXTRAER EL ID DEL USUARIO PARA INSERTARLO EN LA TABLA RESERVAS -->
                <label for="">Introduce tu nombre de usuario:</label>
                <input type="text" id="nombre" class="form-control" placeholder="">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="">Teléfono:</label>
                <div class="input-group" data-autoclose="true">
                  <input type="date" id="telefono" class="form-control">

                </div>
              </div>
              <!-- Y AQUI EL CORREO ELECTRÓNICO -->
              <div class="form-group col-md-6" id="">
                <label for="">Correo Electrónico:</label>
                <div class="input-group" data-autoclose="true">
                  <input type="text" id="correoelectronico" class="form-control" autocomplete="off">

                </div>
              </div>
              <!-- SELECT COD CLASE -->
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="">Clase:</label>
                  <input type="text" id="clase" class="form-control" placeholder="">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" id="botonconfirmar" class="btn btn-success"><a href="reserva.php" style="text-decoration:none; color:white">Confirmar </button>
              <button type="button" id="botoncancelarreserva" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>


      <!-- FIN FORMULARIO DE RESERVA -->
  


      <!-- SCRIPTS Y AJAX -->
      

      <script type="text/javascript">
        $("#modal_cross").show();

        $('.clockpicker').clockpicker();

        let calendario1 = new FullCalendar.Calendar(document.getElementById('calendario1'),
          //vista de dia y semanas
          {
            height: 600,
            initialView: 'dayGridMonth',
            locale: "es",
            headerToolbar: {
              left: 'prev,next today',
              center: 'title',
              // right: 'dayGridMonth, timeGridWeek, timeGridDay'
              right: 'dayGridMonth,timeGridWeek,timeGridDay'

            },

            editable: true,
            events: 'datosclases.php?action=listar',

            // dateClick: function(info) {

            //   // alert información del día
            //   limpiarFormulario();
            //   $('#botonreservar').show();
            //   $('#botoncancelar').show();

            //   if (info.allDay) {
            //     $('#fechainicio').val(info.dateStr);
            //     $('#fechafin').val(info.dateStr);
            //   } else {

            //     let fechahora = info.dateStr.split("T");
            //     $('#fechainicio').val(fechahora[0]);
            //     $('#fechafin').val(fechahora[0]);
            // $('#horainicio').val(fechahora[1].substring(0, 5));
            //     // si quieres que la finalice el usuario se desactiva esta opcion
            //     $('#horafin').val(fechahora[1].substring(0, 5));


            //   }

            //   $("#formularioEventos").modal('show');
            // },
            eventClick: function(info) {
              $('#botonreservar').show();
              $("#botoncancelar").show();

              //recuperar todos los datos al hacer click en el evento
              $('#Id').val(info.event.id)
              $('#title').val(info.event.title)
              $('#fechainicio').val(moment(info.event.start).format("YYYY-MM-DD"))
              $('#fechafin').val(moment(info.event.end).format("YYYY-MM-DD"))
              $('#horainicio').val(moment(info.event.start).format("HH:mm"))
              $('#horafin').val(moment(info.event.end).format("HH:mm"))
              $('#colorfondo').val(info.event.backgroundColor)

              $("#formularioEventos").modal('show');
              //limpiarFormulario();

            }
          });

        calendario1.render();


        // funciones para comunicarse con el servidor AJAX : Agregar y Modificar

        function agregarregistro(registro) {
          $.ajax({
            type: 'POST',
            url: 'datosclases.php?action=agregar',
            data: registro,
            success: function(msg) {
              calendario1.refetchEvents();
            },
            error: function(error) {
              alert("hubo un error al agregar el evento" + error)
            }
          })
        }

        function modificarregistro(registro) {
          $.ajax({
            type: 'POST',
            url: 'datosclases.php?action = modificar',
            data: registro,
            success: function(msg) {
              calendario1.refetchEvents();
            },
            error: function(error) {
              alert("hubo un error al modificar el evento" + error)
            }
          });
        }

        // limpiar el formulario
        function limpiarFormulario() {
          $('#Id').val('');
          $('#title').val('');
          $('#fecha').val('');
          $('#horainicio').val('');
          $('#horafin').val('');
          $('#colorfondo').val('#ffffff');
        }

        function recuperardatosformulario() {
          let registro = {
            id: $('#Id').val(),
            titulo: $('#title').val(),
            fecha: $('#fecha').val(),
            inicio: $('#horainicio').val(),
            fin: $('#horafin').val(),
            colorfondo: $('#colorfondo').val()
          }
          return registro;
        }

        function limpiarFormularioreserva() {
          $('#nombre').val('');
          $('#telefono').val('');
          $('#correoelectronico').val('');

        }

        function Reservar() {

          $('#plazasreservadas').val('12')
          $('#plazasdisponibles').val('14')
          $('#Id').val()
          $('#title').val()
          $('#fecha').val()
          $('#horainicio').val()
          $('#horafin').val()
          $('#clase').val()
        }
      </script>
 
       <!-- SCRIPT LANGUAGES -->
  <script src="../JS/langScripts.js"></script>
</body>

</html>