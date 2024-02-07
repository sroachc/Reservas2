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

    <h1>CRUD Reserva de Canchas</h1>

    <h2>Crear/Actualizar reserva</h2>
    <form class="form-style" action="crud.php" method="POST">
        <input type="hidden" name="accion" value="guardar">
        ID (solo para actualización): <input type="number" name="id"><br>
        Fecha: <input type="date" name="fecha"><br>
        Horario:  <input type="time"  id="horario" name="horario" min="08:00" max="22:00"><br>
        Cancha: <select id="idcancha">
            <option value="0"></option>            
        </select><br>
        Usuario: <input type="text" name="usuario"><br>
        <input type="submit" value="Guardar">
    </form>

    <h2>Eliminar reserva</h2>
    <form action="crud.php" method="POST">
        <input type="hidden" name="accion" value="eliminar">
        ID: <input type="number" name="id"><br>
        <input type="submit" value="Eliminar">
    </form>

    <h2>Lista de reservas</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Horario</th>
            <th>Cancha</th>
            <th>Usuario</th>
        </tr>
        <?php
        // Conexión a la base de datos
        $conn = new mysqli('localhost', 'usuario', 'contraseña', 'basededatos');

        // Consulta para obtener la lista de reservas
        $result = $conn->query("SELECT * FROM reservas");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["fecha"] . "</td>";
                echo "<td>" . $row["horario"] . "</td>";
                echo "<td>" . $row["cancha"] . "</td>";
                echo "<td>" . $row["usuario"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay reservas</td></tr>";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
    </table>

    <!-- Footer -->
    <footer>
    </footer>

</body>

</html>