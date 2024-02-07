<?php
include("conexion.php");
include("funcionescruds.php");
$con=conectar();

$nombre=$_POST['nombre'];
$iddeporte=$_POST['deporte'];
$sql="INSERT INTO canchas (nombre, iddeporte) VALUES('$nombre','$iddeporte')";
$query= mysqli_query($con,$sql);
header("location: canchas.php");

mysqli_close($con);

