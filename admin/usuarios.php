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
                <td>RUT</td>
                <td>Tipo de Cuenta</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Correo</td>
                <td>telefono</td>
                <td>direccion</td>           
            </tr>
        </thead>       
            <?php
            $registros = buscarusuarios($con);
            while ($reg = mysqli_fetch_array($registros)){
            ?>
            <tr>
                <td><?php echo $reg['rut'] ?></td>
                <td><?php if($reg['tipo']==1){
                    echo "Administrador";
                 }else{
                    echo "Usuario";
                 } ?></td>
                <td><?php echo $reg['nombres'] ?></td>
                <td><?php echo $reg['apellidos']?></td>
                <td><?php echo $reg['correo'] ?></td>
                <td><?php echo $reg['telefono'] ?></td>
                <td><?php echo $reg['direccion'] ?></td>                
                <td> <a href="editarusuario.php?rut=<?php echo $reg['rut']?>">Modificar</a>
                    &nbsp;  &nbsp;
                    <a href="eliminarusuario.php?rut=<?php echo $reg['rut']?>">Eliminar</a>
                </td>
            </tr>
            <?php
            }
            mysqli_close($con);
            ?>        
    </table>
    <br>
    <a href="registro.php"><input class="button" type="button" value="AÑADIR USUARIO"></a>

    <!-- Footer -->
    <footer>
    </footer>

</body>

</html>