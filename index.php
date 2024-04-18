<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Imane Lamriui El Oumri">
  <meta name="description" content="Página de inicio de FIT">
  <meta name="Keywords" content="HTML, CSS,Javascript">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Página principal</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- STYLE -->
  <link rel="stylesheet" href="Style/stylePage.css">
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
  <!-- BARRA DE NAVEGACIÓN-->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="fa-3x hover-text">

        <a href="PHP/indexLogin.php"><i class="text-secondary inicio-animado d-lg-none d-md-block d-sm-block fa-solid fa-arrow-right-to-bracket fa-2xs" style="color: #0a4ba9;">
            <div class="hide lang" key="identificacionSm">Iniciar</div>
          </i></a>
      </div>


      <!--Logo + lista de nav ul + IDIOMAS + button iniciar sesion para el tamaño lg -->
      <div class="collapse navbar-collapse" id="navbar-toggler">
        <a class="navbar-brand" href="">
          <p id="" class="logo-cabecera d-flex d-sm-none d-lg-block d-md-none d-none">Fit</p>
        </a>


        <ul class="navbar-nav d-flex justify-content-lg-center align-items-lg-center justify-content-sm-start align-items-sm-start">

          <li class="nav-item">
            <a class="nav-link me-3 lang" key="home" style="color: #7a7a7a;
            font-weight:400;" href="index.php">INICIO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link me-3 lang" key="actividades" style="  color: #7a7a7a;
            font-weight:400;" href="PHP/indexTable.php">ACTIVIDADES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 lang" key="reservas" style="  color: #7a7a7a;
              font-weight:400;" href="PHP/indexLogin.php">RESERVAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3 lang" key="contacto" style="  color: #7a7a7a;
              font-weight:400;" href="#contactar" data-bs-toggle="modal" data-bs-target="#contactar">CONTACTO</a>
          </li>
        </ul>

        <div class="lang-menu d-flex">
          <div id="es" style="color: #7a7a7a;
             font-weight:400; font-size: 1.2rem; " class="selected-lang es translate">
            <i class="fa-solid fa-caret-down fa-sm" style="position: absolute; top: 16px; left:38px"></i>
          </div>
          <ul class="ul">
            <li class="li"><a id="us" href="" class="us translate"></a></li>
            <li class="li"><a id="fr" href="" class="fr translate"></a></li>
          </ul>

        </div>

        <div class="hover-text-lg d-flex justify-content-end align-items-center d-sm-none d-lg-block d-none d-md-none">
          <a class="iniciar-sesion lang" href="PHP/indexLogin.php" target="_blank" rel="nooopener noreferrer"><i class="fa-regular fa-circle-user fa-xl" style="color: #242e48;">
              <div class="hide lang" key="identificacion">Identificate</div>
            </i>
          </a>
        </div>

      </div>
    </div>

  </nav>
  <div class="inicio">
    <p class="d-none d-lg-block d-sm-none" id="typedvelocity" style="padding: 30px;">
      <span class="typed"></span>
    </p>
  </div>

  <section>
    <div class="container-fluid reflexion" style=" background: linear-gradient(90deg, #f5f6f7, #d6e7f1, #f5f6f7 );height:600px;">
      <div class="row  d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-6 mt-3">
          <h1 class="title-reflexion  text-center lang" key="text-reflexion1">¿Sabes qué?</h1>
          <p class="text-reflexion  text-center lang" key="text-reflexion2">el ejercicio no sólo cambia tu cuerpo.cambia tu mente, tu actitud y tu humor</p>
          <p class="lang  text-center title-reflexion1" key="reflexionar">A reflexionar</p>
          <a href="PHP/indexTable.php" style="color:#f5f6f7;"><button type="submit" class="button-explorar2 lang mt-3" key="explorar-reflexion">Clases</button></a>
        </div>
        <div class="col-12 col-md-6 col-lg-6 mt-5 mb-5">
          <img class="img-reflexion" src="Images/yogaHomeAdvice.jpg" alt="">
        </div>
      </div>
    </div>
    <!-- CLASES -->
    <section class="text-center">
      <h1 class="title-reflexion titulo-clases lang" key="que-clase-tenemos">¿Que clases tenemos?</h1>
      <div class="container contenedor-galerias d-flex flex-column mt-5">
        <!-- GALERIA DE CLASES -->

        <div class="row clases-impartidas">
          <!-- CLASE1 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/jump.jpg" alt="BoxJump">
              <div class="overlay">
                <p>Jump & Box Jumps</p>
                <p>600 a 800 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- solid o llenas -->
                <i class="fa-solid fa-star " style="color: #fd7e14"></i>
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <i class="fa-solid fa-star" style=" color: #fd7e14"></i>
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <!-- vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>

          </div>
          <!-- CLASE2 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/funcionalhome.jpg">
              <div class="overlay">
                <p class="lang" key="funcional">Funcional</p>
                <p> 400 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- estrellas llenas -->
                <i class="fa-solid fa-star " style="color: #fd7e14"></i>
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <!-- estrellas vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>
          </div>
          <!-- CLASE3 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/yoga4.jpg" alt="">
              <div class="overlay">
                <p>Yoga</p>
                <p>200 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- estrellas llenas -->
                <i class="fa-solid fa-star " style="color: #fd7e14"></i>
                <!--estrellas vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>
          </div>

          <!-- CLASE 4 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/crossfit2.jpg" alt="crossfit">
              <div class="overlay">
                <p>Cross Training</p>
                <p>800 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- solid o llenas -->
                <i class="fa-solid fa-star " style="color: #fd7e14"></i>
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <i class="fa-solid fa-star" style=" color: #fd7e14"></i>
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <!-- vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>
          </div>
          <!-- CLASE 5 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/gapfinal.jpg" alt="Baile">
              <div class="overlay">
                <p>GAP</p>
                <p>300 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- solid o llenas -->
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <i class="fa-solid fa-star-half-stroke" style="color: #fd7e14"></i>
                <!-- vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>
          </div>
          <!-- CLASE 6 -->
          <div class="col-12 col-md-6 col-lg-4">
            <div class="Actividad">
              <img src="Images/musculacionHome.jpg" alt="">
              <div class="overlay">
                <p class="lang" key="musculacion">Musculación</p>
                <p>220 <span class="lang" key="calorias-por-hora">calorías/hora</span></p>
                <!-- solid o llenas -->
                <i class="fa-solid fa-star" style="color: #fd7e14"></i>
                <i class="fa-solid fa-star-half-stroke" style="color: #fd7e14;"></i>
                <!-- vacias -->
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
                <i class="fa-regular fa-star" style="color: #fd7e14;"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- REFLEXION -->
    <section>
    <h1 class="text-center title-reflexion titulo-clases lang" key="Experiencia-óptima-en-cualquier-dispositivo">¡Experiencia óptima en cualquier dispositivo!</h1>
      <div class="container-fluid reflexion" style=" background: linear-gradient(90deg, #f5f6f7, #d6e7f1, #f5f6f7 );height:600px;">
      
        <div class="row d-flex justify-content-center align-items-center  mt-5 py-5">
          <div class="col-12 col-md-6 col-lg-6 mt-3">

            <img class="img-reflexion" src="Images/pantallas2.png" alt="" style="width:90%; margin-left:20px;">
          </div>
          <div class="col-12 col-md-6 col-lg-6 mt-3 d-sm-none d-lg-block d-md-block d-none">
            <h1 class="title-reflexion  text-center lang" key="text-reflexion4">¿Como funciona nuestro sistema?</h1>
            <p class="text-reflexion  text-center lang" key="text-reflexion5"> Accede y consulta la disponibilidad del día y la hora que quiere hacer la reserva. De forma instantánea, queda confirmada.</p>
            <p class="lang  text-center title-reflexion1" key="reflexionar6">haz click aquí</p>
            <a href="PHP/indexLogin.php" style="color:#f5f6f7;"><button type="submit" class="button-explorar2 lang mt-3" key="explorar-reflexion3">Acceder</button></a>
          </div>

        </div>
      </div>
    </section>
    <!-- EXPLORAR CLASES -->
    <section>
      <div class="container-fluid contenedor-tabla">

        <h1 class="title-reflexion text-center lang p-4" key="pulsa-detalles">Pulsa para ver las clases con detalles</h1>
        <div class="d-flex justify-content-center align-items-center">

          <a href="PHP/indexTable.php" style="color:#f5f6f7;"><button type="submit" class="button-explorar lang" key="botón-explorar">Explorar</button></a>

        </div>
      </div>
    </section>

    <!-- CONTACTO-->

    <div class="container contenedor-footer">
      <div class="row">

        <div id="contacto" class="contacto d-flex flex-column justify-content-center align-items-center">
          <p class="text-center texto-footer-contacto lang" key="recibe-info-footer" style=" color: #f2f2f2;">SI DESEAS RECIBIR MÁS
            INFORMACIONES</p>
          <button class="texto-footer-contacto btn text-center lang" data-bs-toggle="modal" data-bs-target="#contactar" key="contacta-con-nosotros">CONTACTA CON
            NOSOTROS</button>

          <!-- Modal -->
          <div class="modal fade" id="contactar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5 text-primary" id="staticBackdropLabel">Contacta con nosotros</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="">
                  <div class="modal-body">
                    <label class="mt-2">Nombre</label>
                    <input type="text" class="form-control mt-1" placeholder="Nombre">
                    <label class="mt-2">Teléfono</label>
                    <input type="text" placeholder="Teléfono" class="form-control mt-1">
                    <label class="mt-2">Correo Electrónico</label>
                    <input type="text" placeholder="Correo Electrónico" class="form-control mt-1">
                    <label class="mt-2">Mensaje</label>
                    <textarea class="form-control"></textarea>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="px-3 py-1 bg-primary text-white" style="border:none; border-radius:20px;font-weight: 500;" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="px-3 py-1 bg-primary text-white" style="border:none;  border-radius:20px;font-weight: 500;">Enviar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div style="position: absolute; margin-top: 60px;">
          <p class="telef">
            <i class="fa-solid fa-phone" style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; "></i>
            XXXXXXXXX
          </p>
        </div>

        <div class="d-flex flex-wrap align-items-center justify-content-center icons" style="margin-top: 70px;">
          <a href="" data-bs-toggle="modal" data-bs-target="#contactar" target="_blank" rel="nooopener noreferrer"><i class=" bi bi-envelope-at"></i></a>
          <a href="" target="_blank" rel="nooopener noreferrer"><i class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/in/imane-l/" target="_blank" rel="nooopener noreferrer"><i class=" bi bi-linkedin"></i></a>
          <a href="" target="_blank" rel="nooopener noreferrer"><i class="bi bi-telegram"></i></a>
        </div>


      </div>
    </div>
    </div>

    <!-- Pie de pagina O  footer -->
    <footer>


      <!-- informaciónes de privacidad con el logo -->
      <div class="row info-end">
        <div class="d-flex flex-column justify-content-center align-items-center mt-3">
          <a href=""><img id="home" src="Images/logo final 2.png" alt="" width="120" class="logo-info-end"></a>

          <p class="text-center mt-2 copiright lang"><a id="home" class="FitFast_href" href=""> Fit</a> Center
            2023<br> <span class="lang" key="derechos-reservados">Todos
              los derechos reservados</span> <i class="fa-regular fa-copyright fa-sm" style="color: #7a7a7a;"></i>
          </p>
        </div>
      </div>

      <div class="row politica-privacity">

        <div class="col-12 col-md-4">
          <a href="">
            <p class="lang" key="privacidad">Politica de privacidad</p>
          </a>
        </div>
        <div class="col-12 col-md-4">
          <a href="">
            <p class="lang" key="cookies">Politica de cookies</p>
          </a>

        </div>
        <div class="col-12 col-md-4">
          <a href="">
            <p class="lang" key="codiciones-uso">Condiciones de Uso</p>
          </a>

        </div>
        <!-- <div class="col-12 col-md-3">
          <a href="">
            <p class="lang" key="darse-baja">Darse de baja</p>
          </a>

        </div> -->
      </div>

    </footer>

    <!-- ********************SCRIPTS**************************** -->
    <!-- TYPED SCRIPTS-->
    <script src="https://unpkg.com/typed.js@2.0.14/dist/typed.umd.js"></script>
    <script src="JS/types.js"></script>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- SCRIPT JQUERY  -->
    <script src="JS/jquery-3.6.4.min.js"></script>
    <!-- SCRIPT LANGUAGES -->
    <script src="JS/langScripts.js"></script>
    <!-- SCRIPT BANDERAS DINAMICAS -->
    <!-- <script src="JS/banderasDinamicas.js"></script> -->
</body>

</html>