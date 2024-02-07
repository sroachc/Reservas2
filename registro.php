<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FieldFinder - ¡Reserva tu cancha!</title>
    <link rel="StyleSheet" href="style/css" type="text/css">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <!-- Logo -->
    <div>
        <h1>FieldFinder</h1>
    </div>

    <!-- Slider -->
    <div class="slider">
        <img src="imgs/cancha.jpg" alt="Imagen 1">
        <img src="imgs/cancha2.jpg" alt="Imagen 2">
        <img src="imgs/cancha3.jpg" alt="Imagen 3">
    </div>

    <!-- Navbar -->
    <div class="navbar-style">
            <ul class="menu-items">
                <li>
                    <a href="index.html"><input class="button" type="button" value="INICIO"></a>
                </li>
                <li>
                  <a href="reserva.php"><input class="button" type="button" value="RESERVA"></a>
                </li>                
                <li>
                    <a href="registro.php"><input class="button" type="button" value="REGISTRARSE"></a>
                </li>
                <li>
                    <a href="login.php"><input class="button" type="button" value="INICIAR SESIÓN"></a>
                </li>
                <li>
                    <a href="contacto.html"><input class="button" type="button" value="CONTÁCTANOS"></a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Formulario Registro Cuenta -->
    <form class="form-style" action="registroinsert.php" method="POST">
        <ul>
            <li>
                <h1>REGISTRAR CUENTA</h1>
            </li>
            <li>
                <label for="rut">RUT</label>
                <input type="text" id="rut" name="rut">
            </li>
            <li>
                <label for="nombres">NOMBRES</label>
                <input type="text" id="nombres" name="nombres">
            </li>
            <li>
                <label for="apellidos">APELLIDOS</label>
                <input type="text" id="apellidos" name="apellidos">
            </li>
            <li>
                <label for="correo">CORREO</label>
                <input type="email" id="correo" name="correo">
            </li>

            <li>
                <label for="telefono">TELÉFONO</label>
                <input type="text" id="telefono" name="telefono">
            </li>
            <li>
                <label for="direccion">DIRECCIÓN</label>
                <input type="text" id="direccion" name="direccion">
            </li>
            <li>
                <label for="pass">CONTRASEÑA</label>
                <input type="password" id="pass" name="pass">
            </li>
            <li>
                <label for="passrepeat">REINGRESAR CONTRASEÑA</label>
                <input type="password" id="passrepeat" name="passrepeat">
            </li>
            <li>
                <p><input type="checkbox" id="terminos">Estoy de acuerdo con los <a href="#">términos de servicio</a>.
                </p>
            </li>
            <input type="submit" value="REGISTRAR CUENTA">
            </li>
        </ul>
        <div class="">
            <p>¿Ya tienes una cuenta? <a href="login.php">Ingresa Aquí</a>.</p>
        </div>
    </form>

    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>