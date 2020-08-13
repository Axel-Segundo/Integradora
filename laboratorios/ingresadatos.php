<?php 

include '../BD/bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $lab = $_POST["laboratario"];
    $prof = $_POST["profesor"];
    $materia = $_POST["materia"];
    $carrera = $_POST["carrera"];
    $cuatri = $_POST['cuatrimestre'];
    $grupo = $_POST["grupo"];
    $fecha = $_POST["fecha"];
    $hentrada = $_POST["entrada"];
    $hsalida = $_POST["salida"];
    $thoras = $_POST["total"];
    $equipo = $_POST["equipo"];
    $observaciones = $_POST["observaciones"];
    $firma = $_POST["firma"];

    
        $ingresa = " INSERT INTO horarios(`id`, `laboratorio`, `profesor`, `materia`, `carrera`, `cuatrimestre`, `grupo`, `fecha`, `h_entrada`, `h_salida`, `total_h`, `equip_util`, `observaciones`, `firma`) VALUES (NULL, '$lab', '$prof', '$materia', '$carrera', '$cuatri', '$grupo', '$fecha', '$hentrada', '$hsalida', '$thoras', '$equipo', '$observaciones', '$firma')";
        $resultado = mysqli_query($conexion, $ingresa);

        mysqli_close($conexion);
            
        
}

require 'redesi.php';


