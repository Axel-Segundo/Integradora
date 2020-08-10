<?php
include ("../../BD/bd.php");

$lab = $_POST["nombre"];
$prof = $_POST["profesor"];
$materia = $_POST["materia"];
$carrera = $_POST["carrera"];
$cuatrimestre = $_POST["cuatrimestre"];
$grupo = $_POST["grupo"];
$fecha = $_POST["fecha"];
$entrada = $_POST["entrada"];
$salida = $_POST["salida"];
$total = $_POST["total"];
$equipo =  $_POST["equipo"];
$observaciones = $_POST["observaciones"];
$firma = $_POST["firma"];

$insertar = "INSERT INTO horarios(laboratorio, profesor, materia, carrera, cuatrimestre, grupo, fecha, h_entrada, h_salida, total_h, equip_util, observaciones, firma) VALUES ('$lab', '$prof', '$materia', '$carrera', '$cuatrimestre', $grupo', '$fecha', '$entrada', '$salida', '$total', '$equipo', '$observaciones', '$firma')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado) {
    echo "<script>alert('registro con éxito')";
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../redesi.php"); 
}else {
    echo "<script>alert('registro fallido')";
}

?>