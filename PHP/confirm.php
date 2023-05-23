<?php
include 'conexion.php';

if (isset($_GET['Correo'])) {
    $email = $_GET['Correo'];
 

}
else{
    header('Location: indexLogin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifiar Cuenta</title>
   <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
            <form class="col-3" action="mailVerification.php" method="POST">
                <h2>Verificar Cuenta</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Código de Verificación</label>
                    <input type="number" class="form-control" id="c" name="codigo">
                    <input type="hidden" class="form-control" id="email" name="Correo" value="<?php echo $email;?>">
                </div>

                <button type="submit" class="btn btn-primary">Verificar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- Bootstrap-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"></script>
</body>

</html>