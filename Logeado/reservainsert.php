<?php
include('conexion.php'); 
include('funcionescruds.php');
$con=conectar();   

$rut = $_POST['rut'];
$horai = $_POST['fecha_horai'];
$horaf = $_POST['fecha_horai'];
$idcancha = $_POST['idcancha'];

$sql = "INSERT INTO reservas(idcancha, rut, horario_inicio, horario_fin, estado) VALUES ('$idcancha','$rut','$horai','$horaf','Reservado')";
$query = mysqli_query($con, $sql);

header("location: reservas.php");
mysqli_close($con);
