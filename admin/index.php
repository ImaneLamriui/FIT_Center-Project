<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Imy Lmr">
  <meta name="description" content="Página de inicio de FIT & FAST">
  <meta name="Keywords" content="HTML, CSS,Javascript">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Panel de administración</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- STYLE -->
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

</head>

<body>
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Panel de administración</h5>
      <span class="text-center fw-bold text-white fs-5">Fit center</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-md-3 col-12">
        <div class="card text-bg-success mb-3" style="max-width: 18rem;  height: 300px;">
          <div class="card-header text-center fw-bold fs-4">Mensajes</div>
          <div class="card-body">
            <h5 class="card-title">Mensajes de contactos:</h5>
            <p class="card-text"><a href="" class="text-black">1 mensaje nuevo</a><br></p>

          </div>
        </div>
      </div>

      <div class="col-md-3 col-12">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem; height: 300px;">
          <div class="card-header text-center fw-bold fs-4">Usuarios</div>
          <div class="card-body">
            <h5 class="card-title">Total de usuarios</h5>
            <?php
            include '../PHP/conexion.php';
            // SELECCIONAR DE USUARIO REGISTROS
            $usuarios = $conexion->query("SELECT * FROM usuarios");

            $numUsuarios =  $usuarios->setFetchMode(PDO::FETCH_ASSOC);
            $numUsuarios =  $usuarios->fetchAll();
            $num = count($numUsuarios);

            echo "<p class='card-text'>$num Usuarios</p>";
            ?>
          </div>
        </div>
      </div>

      <div class="col-md-3 col-12">
        <div class="card text-bg-success mb-3" style="max-width: 18rem;  height: 300px;">
          <div class="card-header text-center fw-bold fs-4">Reservas</div>
          <div class="card-body">
            <h4 class="card-title">Detalle reservas:</h4>
            <?php
            include '../PHP/conexion.php';
            // SELECCIONAR DE USUARIO REGISTROS
            $reservas = $conexion->query("SELECT * FROM reservas");

            $numReservas =  $reservas->setFetchMode(PDO::FETCH_ASSOC);
            $numReservas =  $reservas->fetchAll();
            echo "<h5 style='font-size: 1rem;'>código de las sesiones:</h5>";
            for ($i = 0; $i <= count($numReservas); $i++) {
              $sesionReservada[] = $numReservas[$i]['id_sesiones'];
              echo "<i style='color: black;font-style: normal;'>$sesionReservada[$i] </i>";
            }
            $num = count($numReservas);

            echo "<p class='card-text'><br>Número Reservas: $num </p>";

            ?>

          </div>
        </div>
      </div>




      <div class="col-md-3 col-12">
        <div class="card text-bg-secondary mb-3" style="max-width: 18rem; height: 300px;">
          <div class="card-header text-center fw-bold fs-4">Clases</div>
          <div class="card-body">
            <h5 class="card-title">Titulos clases:</h5>

            <?php
            include '../PHP/conexion.php';
            // SELECCIONAR DE USUARIO REGISTROS
            $Clases = $conexion->query("SELECT * FROM clases");

            $numClases =  $Clases->setFetchMode(PDO::FETCH_ASSOC);
            $numClases =  $Clases->fetchAll();
            for ($i = 0; $i <= count($numClases) - 1; $i++) {
              $nameClass[] = $numClases[$i]['Nombre'];
              echo "<i style='color: black; font-style: normal;'>$nameClass[$i]<br></i>";
            }

            $num = count($numClases);
            echo "<p class='card-text'>Total son: $num Clases</p>";
            ?>

          </div>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="card text-bg-warning mb-3" style="max-width: 18rem;  height: 300px;">
          <div class="card-header text-center fw-bold fs-4">Gestiones</div>
          <div class="card-body">
            <h5 class="card-title">Clases:</h5>
            <p class="card-text"><a href="">AñadirClases</a><br><a href=""> ModificarClases</a><br><a href="">EliminarClases</a></p>
            <h5 class="card-title">Usuarios:</h5>
            <p class="card-text"><a href="">EliminarUsuario</a><br><a href="">BloquearUsuario</a><br><a href="">ConfiguraciónCuentaUsuario</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ********************SCRIPTS**************************** -->

  <!-- Bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <!-- SCRIPT JQUERY  -->
  <script src="JS/jquery-3.6.4.min.js"></script>

</body>

</html>