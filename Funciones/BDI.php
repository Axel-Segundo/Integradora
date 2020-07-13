<?php 

    $usario = "root";
    $contrasenha = "";
    $host = "localhost";
    $BD = "usuarios";

    $conexion = new mysqli($host, $usario, $contrasenha, $BD);

    if (!$conexion) {
        die('<strong> No pudo conectarse </strong>' . mysql_error());
    }else{
        echo 'Conectado correctamente <br />';
    }
?>