<?php
include("conexion.php");
$con = conectar();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FieldFinder - ¡Reserva tu cancha!</title>
    <link rel="StyleSheet" href="../style/css" type="text/css">
    <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
    <header>

        <!-- Logo -->
        <div>
            <h1>FieldFinder</h1>
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
                    <a href="reserva.php?rut=<?php echo $_SESSION['rut']; ?>"><input class="button" type="button" value="RESERVAR AHORA"></a>
                </li>
                <li>
                    <a href="reservas.php"><input class="button" type="button" value=" VER RESERVAS"></a>
                </li>
                <li>
                    <a href="contacto.php"><input class="button" type="button" value="CONTÁCTANOS"></a>
                </li>
                <li>
                    <a href="../index.html"><input class="button" type="button" value="CERRAR SESIÓN"></a>
                </li>
            </ul>
        </div>
    </header>

    <!-- Formulario Reservas -->
    <form class="form-style" action="reservasform.php" method="POST">
        <ul>
            <li>
                <h4>Seleccione el deporte:</h4>
            </li>
            <li>
                <label for="deporte">DEPORTE</label>
                <select id="deporte" name="deporte" required>
                    <option value="">Seleccione:</option>
                    <?php                    
                    $consulta = "SELECT * FROM deportes";
                    $ejecutar = mysqli_query($con, $consulta) or die(mysqli_error($con));
                    foreach ($ejecutar as $opciones) :
                    ?>
                        <option value="<?php echo $opciones['iddeporte'] ?>"><?php echo $opciones['Nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </li>
            <li>
                <label for="horario">HORARIO INICIO</label>
                <input type="datetime-local" id="fecha_horai" name="fecha_horai" required>
            </li>
            <li>
                <label for="horario">HORARIO TERMINO</label>
                <input type="datetime-local" id="fecha_horaf" name="fecha_horaf" required>
            </li>
            <li>
                <input type="submit" value="Buscar Canchas">
            </li>
        </ul>

    </form>

    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>