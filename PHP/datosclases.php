 <?php
    //SESSION 
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

    //FIN SESSION 


    header("Content-Type: application/json");
    include "conexion.php";

    switch ($_GET['action']) {
        case 'listar':

            $datos = $conexion->query("select id, titulo as title, fechahorainicio as start, fechahorafin as end, colorfondo as backgroundColor from sesiones");

            $resultado =  $datos->setFetchMode(PDO::FETCH_ASSOC);
            $resultado =  $datos->fetchAll();
            echo json_encode($resultado);

            break;

        case 'confirmar':


            $datos1 = $conexion->prepare("SELECT Id AS id from usuarios  WHERE  usuario = '$_SESSION[usuario]' ");
            $resultado1 =  $datos1->execute();
            $resultado1 =  $datos1->setFetchMode(PDO::FETCH_ASSOC);
            $cons1 = $datos1->fetchAll();
            echo json_encode($cons1[0]["id"]);



            $datos2 = $conexion->prepare("SELECT cod AS cod from clases WHERE Nombre =  :clase");
            $resultado2 =  $datos2->execute(array(
                "clase" => $_POST['clase']
            ));
            $resultado2 =  $datos2->setFetchMode(PDO::FETCH_ASSOC);
            $cons2 = $datos2->fetchAll();
            echo json_encode($cons2);

            $implementReserva = $conexion->prepare("INSERT INTO reservas (Id_usuario, Cod_clase, id_sesiones,  Fecha_reserva, Hora_reserva) VALUES (:id, :cod, :id_sesion, :fInicio, :hInicio)");

            $resultado4 = $implementReserva->execute(array(

                "id" => $cons1[0]["id"],
                "cod" => $cons2[0]["cod"],
                "id_sesion" => $_POST['id_sesion'],
                "fInicio" => $_POST['fInicio'],
                "hInicio" => $_POST['hInicio']
            ));

            $resultado4 = $implementReserva->setFetchMode(PDO::FETCH_ASSOC);
            $cons3 = $implementReserva->fetchAll();
            echo json_encode($cons3);
            echo "insertados!";
            $total= $_POST['plazasdisponibles'] + $_POST['plazasreservadas'];
            $actualizarPlazas = $conexion->prepare("UPDATE sesiones SET plazasdisponibles = :plazasdisponibles , plazasreservadas = :plazasreservadas WHERE id = :id_sesion ");
           
            $resultado5 =  $actualizarPlazas->execute(array(
                "id_sesion" => $_POST['id_sesion'],
                "plazasdisponibles" => $_POST['plazasdisponibles'] - '1',
                "plazasreservadas" => $_POST['plazasreservadas'] + '1'
            
               ))
                 ;
            
            $resultado5 = $actualizarPlazas->setFetchMode(PDO::FETCH_ASSOC);
            $cons4 = $actualizarPlazas->fetchAll();
            echo json_encode($cons4);

            echo "plazas actualizadas!";

     
            break;

        case 'cancelarReserva';
           

            $cancelarReserva = $conexion->prepare("DELETE FROM reservas where Id_usuario = :id");
            $resultado6 =  $cancelarReserva->execute(array(
                "id" => $_POST['']
            ));
            $resultado6 =  $datos6->setFetchMode(PDO::FETCH_ASSOC);
            $cons5 = $datos6->fetchAll();
            echo json_encode($cons5);

            break;

        case 'darseDeBaja';

            if (isset($_POST['id'])) {
                $resultado7 = false;
                $darseDeBaja = $conexion->prepare("DELETE FROM usuarios where Id = :id");
                $resultado7 =  $darseDeBaja->execute(array(
                    "id" => $_POST['']
                ));
            }
            echo json_encode($resultado7);
            echo "Usuario dado de baja correctamente!";
            break;

        default:
            # code...
            break;
    }
