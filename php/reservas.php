<?php
include('conexion.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST["accion"];

    // Conexión a la base de datos
    $conn = new mysqli('localhost', 'usuario', 'contraseña', 'basededatos');

    if ($accion == "guardar") {
        // Recuperar los datos del formulario
        $id = $_POST["id"];
        $fecha = $_POST["fecha"];
        $horario = $_POST["horario"];
        $cancha = $_POST["cancha"];
        $usuario = $_POST["usuario"];

        if ($id) {
            // Actualizar la reserva
            $conn->query("UPDATE reservas SET fecha = '$fecha', horario = '$horario', cancha = '$cancha', usuario = '$usuario' WHERE id = $id");
        } else {
            // Insertar la nueva reserva
            $conn->query("INSERT INTO reservas (fecha, horario, cancha, usuario) VALUES ('$fecha', '$horario', '$cancha', '$usuario')");
        }
    } elseif ($accion == "eliminar") {
        // Recuperar el ID del formulario
        $id = $_POST["id"];

        // Eliminar la reserva
        $conn->query("DELETE FROM reservas WHERE id = $id");
    }

    // Cerrar la conexión a la base de datos
    $conn->close();

    // Redireccionar al html
    header("Location: ../admin/reservas.html");
}
?>