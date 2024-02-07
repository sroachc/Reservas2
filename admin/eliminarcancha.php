<?php
  include('conexion.php');
  $con=conectar();

  function eliminar($con, $id){
  $sql = "delete from canchas where idcancha=$id";
  $ok= mysqli_query($con,$sql);
  return $ok;
}
  $id = $_REQUEST['idcancha'];
  $ok = eliminar($con,$id);
  mysqli_close($con);
  header("Location: canchas.php");
  exit();
  ?>