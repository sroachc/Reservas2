<?php
include('conexion.php');
include('funcionescruds.php');
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
    <table id="">
        <thead>
            <tr>
                <td>ID</td>
                <td>Cancha</td>
                <td>Inicio de reserva</td>
                <td>Termino de reserva</td>
                <td>Estado</td>
            </tr>
        </thead>
        <?php
        $registros = buscarreservas($con);
        while ($reg = mysqli_fetch_array($registros)) {
            $regid = $reg['idcancha'];
            $idcancha = buscarcanchasid($con, $regid);
            $cancha = mysqli_fetch_assoc($idcancha);
        ?>
            <tr>
                <td><?php echo $reg['idreserva'] ?></td>
                <td><?php echo $cancha['nombre'] ?></td>
                <td><?php echo $reg['horario_inicio'] ?></td>
                <td><?php echo $reg['horario_fin'] ?></td>
                <td><?php echo $reg['estado'] ?></td>

                <td> <a href="editarreserva.php?idreserva=<?php echo $reg['idreserva'] ?>">Modificar</a>
                    &nbsp; &nbsp;
                    <a href="eliminarreserva.php?idreserva=<?php echo $reg['idreserva'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php
        }
        mysqli_close($con);
        ?>
    </table>
    <!-- Footer -->
    <footer>
    </footer>
</body>

</html>