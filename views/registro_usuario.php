<?php session_start();

include '../BD/bd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $matricula =  $_POST["matricula"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["appat"];
    $apellido2 = $_POST["apmat"];
    $tipo = $_POST["tipo"];
    $usuario = filter_var(strtolower($_POST["usuario"]), FILTER_SANITIZE_STRING);
    $contraseña = $_POST["contraseña"];
    $confcont = $_POST["confcont"];
    $avatar = 'default';

    $errores = '';

    if (empty($matricula) or empty($nombre) or empty($apellido1) or empty($apellido2) or empty($tipo) or empty($usuario) or empty($contraseña) or empty($confcont)) {
        $errores = '<li>Llena todos los campos</li>';
    } else {

        $statement = "SELECT usuario FROM usuarios WHERE usuario = :usuario LIMIT 1";
        $result = mysqli_query($conexion, $statement);


        if ($result) {
            $errores = '<li>El nombre de usuario ya existe</li>';
        }

        $contraseña = hash('sha512', $contraseña);
        $confcont = hash('sha512', $confcont);

        if ($contraseña != $confcont) {
            $errores = '<li>Las contraseñas no son iguales</li>';
        }




        $insertar = " INSERT INTO usuarios(`id`, `matricula`, `nombre`, `ap_pat`, `ap_mat`, `usuario`, `contraseña`, `avatar`, `tipo`) VALUES (NULL, '$matricula', '$nombre', '$apellido1', '$apellido2', '$usuario', '$contraseña', '$avatar', '$tipo');";

        $resultado = mysqli_query($conexion, $insertar);


        mysqli_close($conexion);
    }
}
require 'crearusuarios.php';
