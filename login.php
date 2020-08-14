<?php
session_start();
include 'BD/bd.php';

// Obtengo los datos cargados en el formulario de login.
$usuario = $_POST['usuario'];
$password = md5($_POST['password']);

// Consulta segura para evitar inyecciones SQL.
$sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña ='$password' ";

$resultado = $conexion->query($sql);
$resultado = $resultado->fetch_all();
print_r($resultado);

// Verificando si el usuario existe en la base de datos.
if (count($resultado) > 0) {



  if ($resultado[0]['tipo'] == 'administrador') {
    $_SESSION['usuario'] = $usuario;
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: view/inicioprofesor.view.php");

  } else {

    // Guardo en la sesión el email del usuario.
    $_SESSION['usuario'] = $usuario;
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily");
    header("Location: contenido_profesor.php");
  }
  echo 'El usuario o contraseña es incorrecto, <a href="index.php">vuelva a intenarlo</a>.<br/>';
}
