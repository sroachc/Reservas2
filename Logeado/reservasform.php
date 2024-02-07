<?php
include('conexion.php');
include('funcionescruds.php');
$con = conectar();
$deporte = $_REQUEST['deporte'];
$horai = $_REQUEST['fecha_horai'];
$horaf = $_REQUEST['fecha_horaf'];
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
    <form class="form-style" action="reservainsert.php" method="POST">
        <input type="hidden" name="rut" value="<?php echo $_SESSION['rut'] ?>">
        <input type="hidden" name="fecha_horai" value="<?php echo $horai ?>">
        <input type="hidden" name="fecha_horaf" value="<?php echo $horaf ?>">
        <ul>
            <li>
                <label for="cancha">CANCHAS DISPONIBLES</label>
                <select id="idcancha" name="idcancha" required>
                    <option value="">Seleccione:</option>
                    <?php
                    $ejecutar = buscarcanchasfiltradas($con, $deporte);
                    foreach ($ejecutar as $opciones) : ?>
                        <option value="<?php echo $opciones['idcancha'] ?>"><?php echo $opciones['nombre'] ?></option>
                    <?php endforeach ?>
                </select>
            </li>
            <li>
                <input type="submit" value="CREAR RESERVA">
            </li>
        </ul>

    </form>

    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>