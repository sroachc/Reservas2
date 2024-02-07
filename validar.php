<?php
include('conexion.php');
$con=conectar();
$correo=$_POST['correo'];
$pass=$_POST['pass'];
session_start();
$_SESSION['correo']=$correo;

$consulta="SELECT*FROM usuarios where correo='$correo' and password='$pass'";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);
$tipo = mysqli_fetch_assoc($resultado);
$_SESSION['rut'] = $tipo['rut'];

if($filas && $tipo['tipo'] == true){   
  
  header("location:admin/index.php");

}elseif($filas && $tipo['tipo'] == false){  

  header("location:Logeado/index.php");

}else{
  ?>
  <h1>Ups... se ha puesto mal algún dato, regresa a la pagina principal tocando aquí: <a href="login.php">Volver</a></h1>
  <h1><?php echo $tipo;?></h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>