<?php
  include('conexion.php');
  $con = conectar();
  function modificar($conexion, $id, $idc, $rut, $hori, $horf){

    $sql="update canchas set 
    idcancha='$idc', 
    rut='$rut', 
    horario_inicio='$hori', 
    horario_fin='$horf' 
    where idreserva='$id'
    ";
    $ok= mysqli_query($conexion, $sql);
    return $ok;
  }

  $id=$_REQUEST['idreserva'];
  $idc=$_REQUEST['idcancha'];
  $rut=$_REQUEST['rut'];
  $hori=$_REQUEST['horario_inicio'];
  $horf=$_REQUEST['horario_fin'];

  $ok = modificar($con, $id, $idc, $rut, $hori, $horf);

  mysqli_close($con);
  header("Location:reservas.php");
  exit();
  ?>