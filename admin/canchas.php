<?php 
    include('conexion.php'); 
    include('funcionescruds.php');
    $con=conectar();       
?>
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

    <!-- CRUD De Canchas -->
    <table id="">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Deporte</td>
            </tr>
        </thead>       
            <?php
            $registros = buscarcanchas($con);
            while ($reg = mysqli_fetch_array($registros)){
                $regid = $reg['iddeporte'];
                $iddeporte = obtenerdeporte($con, $regid);
                $deporte = mysqli_fetch_assoc($iddeporte);                
            ?>
            <tr>
                <td><?php echo $reg['idcancha'] ?></td>
                <td><?php echo $reg['nombre'] ?></td>
                <td><?php echo  $deporte['nombre']?></td>
                <td> <a href="editarcancha.php?idcancha=<?php echo $reg['idcancha']?>">Modificar</a>
                    &nbsp;  &nbsp;
                    <a href="eliminarcancha.php?idcancha=<?php echo $reg['idcancha']?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            mysqli_close($con);
            ?>        
    </table>
    <br>
    <a href="canchasinsertform.php"><input class="button" type="button" value="AÑADIR CANCHA"></a>

    <!-- Footer -->
    <footer>
    </footer>

</body>

</html>