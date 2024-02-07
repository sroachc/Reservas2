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
    <header>

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

    <!-- Formulario Iniciar Sesión -->
    <form class="form-style" action="validar.php" method="POST">
        <ul>
            <li>
                <h4>INICIAR SESIÓN</h4>
            </li>
            <li>                
                <label for="correo">CORREO</label>
                <input type="email" id="correo" name="correo" required>
            </li>
            <li>
                <label for="pass">CONTRASEÑA</label>
                <input type="password" id="pass" name="pass" required>
            </li>
            <li>
                <input type="submit" value="INICIAR SESIÓN">
            </li>   
        </ul>
        <div class="">
            <p>¿Aún no tienes una cuenta? <a href="registro.php">Crea una aquí</a>.</p>
        </div>             
    </form>

    <!-- Footer -->
    <footer>
    </footer>

</body>

</html>