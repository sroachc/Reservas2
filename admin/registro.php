<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido Administrador - FieldFinder</title>
    <link rel="StyleSheet" href="../style/css" type="text/css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
    <header>

        <!-- Logo -->
        <div>
            <h1></h1>
        </div>

        <!-- Slider -->
        <div class="slider">
            <img src="../imgs/cancha.jpg" alt="Imagen 1">
            <img src="../imgs/cancha2.jpg" alt="Imagen 2">
            <img src="../imgs/cancha3.jpg" alt="Imagen 3">
        </div>

        <!-- Navbar -->
        <div class="navbar-style">
            <ul class="menu-items">
                <li>
                    <a href="index.php"><input class="button" type="button" value="INICIO"></a>
                </li>
                <li>
                    <a href="reservas.php"><input class="button" type="button" value="GESTIONAR RESERVAS"></a>
                </li>
                <li>
                    <a href="usuarios.php"><input class="button" type="button" value="GESTIONAR USUARIOS"></a>
                </li>
                <li>
                    <a href="canchas.php"><input class="button" type="button" value="GESTIONAR CANCHAS"></a>
                </li>
                <li>
                    <a href="estadisticas.php"><input class="button" type="button" value="ESTADÍSTICAS"></a>
                </li>
                <li>
                    <a href="../index.html"><input class="button" type="button" value="CERRAR SESIÓN"></a>
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
            <input type="submit" value="REGISTRAR CUENTA">
            </li>
        </ul>        
    </form>

    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>