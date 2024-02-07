<?php 
//Buscadores
function buscarcanchas($con){
    $consulta = "SELECT idcancha, nombre, iddeporte FROM canchas";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function buscarusuarios($con){
    $consulta = "SELECT rut, tipo, nombres, apellidos, correo, telefono, direccion FROM usuarios";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function buscarcanchasfiltradas($con, $iddeporte){
    $consulta = "SELECT * FROM canchas where iddeporte=$iddeporte";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function buscarcanchasid($con, $id){
    $consulta = "SELECT * FROM canchas where idcancha=$id";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function buscarreservasid($con, $id){
    $consulta = "SELECT * FROM reservas where idreserva=$id";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function buscarreservas($con){
    $consulta = "SELECT idreserva, idcancha, rut, horario_inicio, horario_fin, estado FROM reservas";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
//Obtener Datos
function obtenerdeporte($con, $iddeporte){

    $consulta = "SELECT nombre FROM deportes WHERE iddeporte=$iddeporte";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}
function obtenerusuario($con, $rut){
    $consulta = "SELECT*FROM usuarios WHERE rut='$rut'";
    $registros = mysqli_query($con,$consulta);
    return $registros;
}

?>