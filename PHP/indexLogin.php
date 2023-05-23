<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Card</title>
    <!-- AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../Style/styleLogin.css">
       <!-- FONT LOGO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@500;600&family=Bruno+Ace+SC&family=Pathway+Extreme:wght@500&family=Poppins:wght@500&family=Quicksand:wght@500&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;0,900;1,100;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="container-form">
        <a class="" href="" style=" text-decoration: none; text-align: center;">
                <p id="" class="logo-cabecera d-flex d-sm-none d-none d-md-block">Fit</p>
              </a>
            <h2 class="title">Iniciar sesión</h2>
            <form action="loginUsuario.php" method="POST">
                <label for="Email">Correo electrónico</label>
                <input type="email" name="Correo" id="" required>
                <label for="Usuario">Usuario</label>
                <input type="usuario" name="usuario" id="" required>
                <label for="password">Contraseña</label>
                <div class="wrapp-input" style="  position: relative;
                width: 100%;"><span class="icon-eye" style="position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;"><i class="fa-solid fa-eye-slash fa-lg"></i></span>
                    <input type="password" name="contrasena" id="password">
                </div>
                <label for="password">Repite contraseña</label>
                <div class="wrapp-input" style="  position: relative;
                width: 100%;"><span class="icon-eye" style="position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;"><i class="fa-solid fa-eye-slash fa-lg"></i></span>
                    <input type="password" name="contrasenaConfirm" id="password">
                </div>

                <input type="submit" value="Iniciar">
            </form>
            <span class="text-footer">¿Aún no te has registrado? <a href="indexRegister.php">Registrate</a></span>
            <!-- <span class="text-footer"><a href="indexRegister.php" style= "color: #354461;font-weight: 500;">¿Has olvidado la contraseña?</a></span> -->
        </div>
        <div class="container-image">
            <div class="capa"></div>
        </div>
    </div>
    <script src="../JS/showPassword.js"></script>

</body>

</html>