<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para mi proyecto</title>
    <!-- AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../Style/styleRegister.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <!-- FONT LOGO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@500;600&family=Bruno+Ace+SC&family=Pathway+Extreme:wght@500&family=Poppins:wght@500&family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body style="height: 1000px" ;>
    <div class="container">
        <div class="container-form">

            <a class="" href="" style=" text-decoration: none; text-align: center;">
                <p id="" class="logo-cabecera d-flex d-sm-none d-none d-md-block">Fit</p>
            </a>
            <form action="registro_usuario.php" method="POST">
                <label for="text">Apellido1</label>
                <input type="text" name="Primer_Apellido">
                <label for="text">Apellido2</label>
                <input type="text" name="Segundo_Apellido">
                <label for="text">Nombre</label>
                <input type="text" name="Nombre">
                <label for="Email">Correo</label>
                <input type="email" name="Correo" id="email" requiered>
                <label for="usuario">Usuario</label>
                <input type="usuario" name="usuario" id="usuario">
                <label for="password">Contraseña</label>
                <div class="wrapp-input" style="  position: relative;
                width: 100%;"><span class="icon-eye" style="position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;"><i class="fa-solid fa-eye-slash fa-lg"></i></span>
                    <input type="password" name="contrasena" id="password">
                </div>
                <!-- aqui repite contraseña -->
                <label for="password">Repite la contraseña</label>
                <div class="wrapp-input" style="position: relative;
                width: 100%;"><span class="icon-eye" style="position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;"><i class="fa-solid fa-eye-slash fa-lg"></i></span>
                    <input type="password" name="contrasenaConfirm" id="password2">
                </div>
                <!-- aqui repite contrsaeña -->

                <input type="submit" value="Registrar" name="registrar" id="registrar">
            </form>

        </div>
        <div class="container-image">
            <div class="capa"></div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="../JS/showPassword.js"></script>
    <script src="../JS/validarFormRegister.js"></script>

</html>