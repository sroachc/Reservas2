<?php
  include('conexion.php');
  include('funcionescruds.php');
  $con=conectar();
  function eliminar($con, $rut){  
  $sql = "delete from usuarios where rut='$rut'";
  $ok= mysqli_query($con,$sql);
  return $ok;
}
  $rut = $_REQUEST['rut'];
  $user = obtenerusuario($con, $rut);
  $usuario = mysqli_fetch_assoc($user);
  if($usuario['tipo']==0){
    $ok = eliminar($con,$rut);      
    header("Location: usuarios.php");
    exit();
  }else{
    ?>
  <h1> Has tratado de eliminar un administrador, lo cual no esta permitido, regresa aqui:<a href="usuarios.php">Volver</a></h1>
  <?php
  }  
  mysqli_close($con);
