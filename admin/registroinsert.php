<?php
include("conexion.php");
$con=conectar();

$rut=$_POST['rut'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$pass=$_POST['pass'];
$passrepeat=$_POST['passrepeat'];


if($passrepeat == $pass){
    $sql="INSERT INTO usuarios VALUES('$rut',0,'$nombres','$apellidos','$correo','$telefono','$direccion','$pass')";
    $query= mysqli_query($con,$sql);
    header("location: usuarios.php");
}else{
    ?>
  <h1>Las contraseñas no coinciden reintentelo nuevamente. <a href="registro.php">VOLVER</a></h1>
  <?php
}
mysqli_close($con);

