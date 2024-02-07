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

    <!-- Formulario Contacto -->
    <div class="contacto">
        
        <div class="inline">
            <form class="form-style">
                <ul>
                    <li>
                        <h4><b>Contactate con nosotros</b></h4>
                    </li>
                    <li>
                        Para cualquier consulta sobre la reserva de las canchas, el funcionamiento de estas o otras
                        consultas.                        
                    </li>
                    <h4>Envianos un mensaje!</h4>
                    <li>
                        <label for="nombre">NOMBRE (REQUERIDO)</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </li>
                    <li>
                        <label for="correo">CORREO (REQUERIDO)</label>
                        <input type="email" id="correo" name="email" required>
                    </li>
                    <li>
                        <label for="comentario">COMENTARIO</label><br>
                        <textarea id="comentario" name="comentario" rows="20" cols="55">
                </textarea>
                    </li>
                    <li>
                        <input type="submit" value="Enviar">
                    </li>
                </ul>
            </form>
        </div>
        <div class="inline">
            <form class="mapa">
                <h4>VE DONDE NOS UBICAMOS</h4>
                <div class="mapouter">                    
                    <div class="gmap_canvas"><iframe width="781" height="568" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Club+de+Golf+Los+Leones+Pdte.+Riesco+3700%2C+Las+Condes%2C+Regi%C3%B3n+Metropolitana&t=&z=12&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://online.stopwatch-timer.net/"></a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 568px;
                                width: 781px;
                            }
                        </style><a href="https://www.embedmaps.co">embed google maps api</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 568px;
                                width: 781px;
                            }
                        </style>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>

    </footer>

</body>

</html>