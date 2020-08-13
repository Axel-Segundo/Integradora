<?php session_start();

require '../BD/bd.php';


if (isset($_POST['registrar'])) {

$lab = $_POST['laboratorio'];
$prof = $_POST['profesor'];
$mat = $_POST['materia'];
$car = $_POST['carrera'];
$cuat = $_POST['cuatrimestre'];
$grupo = $_POST['grupo'];
$fecha = $_POST['fecha'];
$entrada = $_POST['entrada'];
$salida = $_POST['salida'];
$total = $_POST['total'];
$equipo = $_POST['equipo'];
$obsrvaciones = $_POST['observaciones'];
$firma = $_POST['firma'];


$subir = mysqli_query($conexion,"INSERT INTO `horarios` (`id`, `laboratorio`, `profesor`, `materia`, `carrera`, `cuatrimestre`, `grupo`, `fecha`, `h_entrada`, `h_salida`, `total_h`, `equip_util`, `observaciones`, `firma`) VALUES (NULL, '$lab', '$prof', '$mat', '$car', '$cuat', '$grupo', '$fecha', '$entrada', '$salida', '$total', '$equipo', '$obsrvaciones', '$firma');");
}

require header('Location:oracle.php');