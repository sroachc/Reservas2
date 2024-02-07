<?php
  include('conexion.php');
  $con=conectar();

  function eliminar($con, $id){
  $sql = "delete from reservas where idreserva=$id";
  $ok= mysqli_query($con,$sql);
  return $ok;
}

  $id = $_REQUEST['idreserva'];
  $ok = eliminar($con,$id);
  mysqli_close($con);
  header("Location: reservas.php");
  exit();
