<?php
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

    <form class="index">
        <ul>
            <li>
                <h4>Si buscas reservar canchas, esta es la pagina que buscabas.</h4>
                <h4>Tenemos reservas de canchas de los deportes más populares.</h4>
                <h4>La reserva es por 1 hora y debe ingresar cuantas personas entraran a la cancha al momento de
                    reservar.</h4>
                <h4>En caso de haber algun problema con la cancha cuando se presente, se le asignara una nueva.</h4>
            </li>
            <li>
                <h1>Canchas de futbol</h1> <img width="450ex" height="400ex" src="../imgs/cancha futbol.jpg">
                <h4>Nuestros horarios son:</h4>
                <h1>Lunes a Viernes: 8:00 - 22:00.- $8.000 x 1hr</h1>
                <h1>Sabado, Domingo y Festivos : 8:00 - 22:00.- $10.000 x 1hr</h1>
            </li>
            <li>
                <h1>Canchas de basquetbol</h1> <img width="450ex" height="400ex" src="../imgs/Cancha Basquet.jpg">
                <h4>Nuestros horarios son:</h4>
                <h1>Lunes a Viernes: 8:00 - 22:00.- $8.000 x 1hr</h1>
                <h1>Sabado, Domingo y Festivos : 8:00 - 22:00.- $10.000 x 1hr</h1>
            </li>
            <li>
                <h1>Canchas de Tenis</h1> <img width="450ex" height="400ex" src="../imgs/Cancha tenis.jpg">
                <h4>Nuestros horarios son:</h4>
                <h1>Lunes a Viernes: 8:00 - 22:00.- $8.000 x 1hr</h1>
                <h1>Sabado, Domingo y Festivos : 8:00 - 21:00.- $10.000 x 1hr</h1>
            </li>
            <li>
                <h1>Canchas de Padel</h1> <img width="450ex" height="400ex" src="../imgs/Cancha Padel.jpg">
                <h4>Nuestros horarios son:</h4>
                <h1>Lunes a Viernes: 8:00 - 22:00.- $8.000 x 1hr</h1>
                <h1>Sabado, Domingo y Festivos : 8:00 - 21:00.- $10.000 x 1hr</h1>
            </li>
        </ul>
        <div>

        </div>
    </form>




    <!-- Footer -->
    <footer>
        
    </footer>

</body>

</html>