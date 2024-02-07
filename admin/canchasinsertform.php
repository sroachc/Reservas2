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
        </ul>
    </div>
    </header>

    <!-- Formulario Registro Cuenta -->
    <form class="form-style" action="canchasinsert.php" method="POST">
        <ul>
            <li>
                <h1>AGREGAR CANCHA NUEVA</h1>
            </li>
            <li>
                <label for="deporte">DEPORTE</label>
                <select id="deporte" name="deporte">
                    <option value="0">Seleccione:</option>
                    <?php
                    include("conexion.php");
                    $con=conectar();
                    $consulta="SELECT * FROM deportes";
                    $ejecutar=mysqli_query($con, $consulta) or die(mysqli_error($con));
                    foreach ($ejecutar as $opciones):
                    ?>
                    <option value="<?php echo $opciones['iddeporte']?>"><?php echo $opciones['Nombre']?></option>
                    <?php endforeach?>
                </select>
            </li>
            <li>
                <label for="nombre">NOMBRE</label>
                <input type="text" id="nombre" name="nombre">
            </li>         
            <input type="submit" value="REGISTRAR CANCHA">
            </li>
        </ul>
    </form>

    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>