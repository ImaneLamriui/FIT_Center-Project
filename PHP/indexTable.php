<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jqc-1.12.4/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- buttons -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- STYLE -->
    <link rel="stylesheet" href="../Style/stylePage.css">
    <!-- AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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

    <title>Tabla de las actividades</title>
</head>

<body style="background: #d6e7f1;">

    <!-- BARRA DE NAVEGACIÓN-->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="fa-3x hover-text">

                <a href="indexLogin.php"><i class="text-secondary inicio-animado d-lg-none d-md-block d-sm-block fa-solid fa-arrow-right-to-bracket fa-2xs" style="color: #0a4ba9;">
                        <div class="hide">Iniciar</div>
                    </i></a>
            </div>

            <!--logo + lista de nav ul + IDIOMAS +button iniciar sesion para lg -->
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <a class="navbar-brand" href="">
                    <p id="" class="logo-cabecera d-flex d-sm-none d-none d-md-none d-lg-block">Fit</p>
                </a>
                <ul class="navbar-nav d-flex justify-content-lg-center align-items-lg-center justify-content-sm-start align-items-sm-start">

                    <li class="nav-item">
                        <a class="nav-link me-3 lang" key="home" style="color: #7a7a7a;
            font-weight:400;" href="../index.php">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link me-3 lang" key="actividades" style="  color: #7a7a7a;
            font-weight:400;" href="indexTable.php">ACTIVIDADES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 lang" key="reservas" style="  color: #7a7a7a;
              font-weight:400;" href="indexLogin.php">RESERVAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3 lang" key="contacto" style="  color: #7a7a7a;
              font-weight:400;" href="../#contacto">CONTACTO</a>
                    </li>
                </ul>

                <div class="lang-menu d-flex">
                    <div id="es" style="color: #7a7a7a;
             font-weight:400; font-size: 1.2rem; " class="selected-lang es translate"><i class="fa-solid fa-caret-down fa-sm" style="position: absolute; top: 16px; left:38px"></i>
                    </div>
                    <ul class="ul">

                        <li class="li"><a id="us" href="" class="us translate"></a></li>
                        <li class="li"><a id="fr" href="" class="fr translate"></a></li>
                    </ul>



                </div>

                <div class="hover-text-lg d-flex justify-content-end align-items-center d-sm-none d-none d-lg-block d-md-none">
                    <a class="iniciar-sesion lang" href="indexLogin.php" target="_blank" rel="nooopener noreferrer"><i class="fa-regular fa-circle-user fa-xl" style="color: #242e48;">
                            <div class="hide">Identificate</div>
                        </i>
                    </a>
                </div>

            </div>
        </div>

    </nav>

    <!-- Actividades -->
    <div class="container-fluid">
        <!-- Cabecera -->
        <div class="row">
            <div class="fa-beat titulo-actividades h2 text-center mt-5 lang" key="actividades-table" style="--fa-animation-duration: 5s; color: #fd7e14; font-weight: 700;">Actividades</div>
        </div>
        <!-- Tabla -->
        <div class="row">
            <table id="example" class="display table table-striped table-responsive table-hover border border-light-4 table-bordered text-secondary" style="margin: auto; width:80%;">
                <thead class="">
                    <tr class="text-center bg-primary text-white">
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                        <th>Sabado</th>


                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11:00h-11:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12:00h-12:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13:00h-13:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14:00h-14:55h</td>



                    </tr>
                    <tr>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11:00h-11:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12:00h-12:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13:00h-13:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14:00h-14:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09:00h-09:55h</td>


                    </tr>
                    <tr>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11:00h-11h55</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12:00h-12h55</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13:00h-13h55</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14:00h-14h55</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09:00h-09h55</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10h55</td>

                    </tr>
                    <tr>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12:00h-12:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13:00h-13:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14:00h-14:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09:00h-09:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11:00h-11:55h</td>


                    </tr>
                    <tr>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13:00h-13:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14:00h-14:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09:00h-10:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11:00h-11:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12:00h-12:55h</td>


                    </tr>
                    <tr>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>14.00h-14:55h</td>

                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09.00h-09:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16.00h-16:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>11.00h-11:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>12.00h-12:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>13.00h-13:55h</td>


                    </tr>
                    <tr>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>09:00h-09:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16:00h-16:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h-17:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>19:00h-19:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>20:00h-20:55h</td>



                    </tr>
                    <tr>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16:00h-16:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h-17:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Cross Training<br>19:00h-19:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>20:00h-20:55h</td>



                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>


                    </tr>
                    <tr>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h-17:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">Cross
                            Training<br>19:00h-19:55h</td>
                        <td>Yoga<br>20:00h-20:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16:00h-16:55h</td>


                    </tr>
                    <tr>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">Cross
                            Training<br>19:00h-19:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>20:00h-20:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16:00h-16:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h-17:55h</td>


                    </tr>
                    <tr>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">Cross
                            Training<br>19:00h-19:55h</td>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>20:00h-20:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>16:00h-16:55h</td>
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h-17:55h</td>
                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>


                    </tr>
                    <tr>
                        <td class="border  border-white border-top-0 border-bottom-0 border-end-0 border-5">
                            Yoga<br>20:00h-20:55h</td>
                        <td class="border border-warning border-top-0 border-bottom-0 border-end-0 border-5"><span class=" ">Funcional <br>21:00h-21:55h</td>
                        <td class="border border-primary border-top-0 border-bottom-0 border-end-0 border-5">
                            GAP<br>10:00h-10:55h
                        <td class="border border-dark border-top-0 border-bottom-0 border-end-0 border-5">
                            Musculación<br>17:00h:17h55h</td>

                        <td class="borderborder-top-0 border-bottom-0 border-end-0" style=" border:solid#cb7025; border-top:0;">Jump & Box Jumps<br>18:00h-18:55h</td>
                        <td class="border  border-light border-top-0 border-bottom-0 border-end-0 border-5">Cross
                            Training<br>19:00h-19:55h</td>


                </tbody>
            </table>
        </div></div>
            <!-- ***************************JAVASCRIPT LINKS******************************** -->
            <!-- jQuery 3-->
            <script type="text/javascript" src="jQuery/jquery-3.6.3.min.js"></script>
            <!-- Datatable + jQuery 1--> <!-- Datatable buttons -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jqc-1.12.4/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/datatables.min.js"></script>
            <!-- buttons -->

            <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
            <!-- html -->
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
            <!-- PRINT BUTTON -->
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
            <!-- Bootstrap-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <!-- SCRIPT LANGUAGES -->
            <script src="../JS/langScripts.js"></script>

            <!-- Instancia tabla -->
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        paging: true,
                        ordering: true,
                        info: true,
                        columnDefs: [{

                                target: 5,
                                visible: true,
                                searchable: true,
                            },
                            {
                                orderable: false,
                                targets: 5
                            },

                        ],

                        language: {
                            url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json'
                        },
                        //Bflprt
                        dom: 'Bprt',
                        buttons: [
                            'copy', 'excel', {
                                extend: 'pdfHtml5',
                                text: 'Imprimir PDF',
                                title: 'Actividades',
                                messageTop: 'Fecha de generación' + '\n' + new Date(),
                                filename: 'Actividades' + new Date(),
                                pageSize: 'A3',
                                exportOptions: {
                                    columns: [0, 1, 2, 3, 4, 5],
                                }




                            }
                        ]

                    });
                });
            </script>



            <!-- FOOTER -->
            <footer>
            
                <!-- informaciónes de privacidad con el logo -->
                <div class="row info-end mt-5 ">
                    <div class="col-12">
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
                </div>

                <div class="row politica-privacity mt-3">

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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Si quieres darte de baja de nuestra sistema por favor inicia sesión.</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <button class="btn btn-secondary mt-5 p-2" style="width:100px;"><a class="text-light" style="text-decoration: none;" href="loginUsuario.php">Iniciar</a></button>
                                        <!-- guion de baja de usuario -->
                                        <!-- SI LA SESION HA SIDO INICIADA EXITOSAMENTE ENTONCES SE BORRA EL USUARIO DE LA TABLA DE USUARIOS -->


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




</body>

</html>