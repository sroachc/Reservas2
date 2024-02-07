<?php
include('conexion.php');
include('funcionescruds.php');
$con = conectar();


?>
<!DOCTYPE html>
<html>

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

    <?php
    function buscar($con, $id)
    {
        $sql = "SELECT idreserva, idcancha, rut, horario_inicio, horario_fin, estado FROM reservas where idreserva= $id";
        $registros = mysqli_query($con, $sql);
        return $registros;
    }
    $id = $_REQUEST['idreserva'];
    $registros = buscar($con, $id);
    ?>
    <h1>Modificación de Reserva</h1>
    <form class="form-style" action="modificar.php" method="get">
        <?php while ($reg = mysqli_fetch_array($registros)) { ?>
            <input type="hidden" name="idreserva" value="<?php echo $id?>">
            <input type="hidden" name="rut" value="<?php echo $reg['rut']?>">
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
                    <label for="horario">HORARIO INICIO</label>
                    <input value="<?php echo $reg['horario_inicio']?>" type="datetime-local" id="fecha_horai" name="fecha_horai" required>
                </li>
                <li>
                    <label for="horario">HORARIO TERMINO</label>
                    <input value="<?php echo $reg['horario_fin']?>" type="datetime-local" id="fecha_horaf" name="fecha_horaf" required>
                </li>
                <li>
                    <input type="submit" value="Modificar">
                </li>
            </ul>           
        <?php }
        mysqli_close($con);
        ?>
        <input type="submit" value="Modificar">
    </form>

</body>
<!-- Footer -->
<footer>
</footer>

</html>