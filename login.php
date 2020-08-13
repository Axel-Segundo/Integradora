<?php
  session_start();
  include 'BD/bd.php';
  
  // Obtengo los datos cargados en el formulario de login.
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  
  // Consulta segura para evitar inyecciones SQL.
  $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' and contraseña ='$password' ";
  $resultado = $conexion->query($sql);
  
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
	// Guardo en la sesión el email del usuario.
	$_SESSION['usuario'] = $usuario;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: contenido_profesor.php"); 
  }else{
	echo 'El usuario o contraseña es incorrecto, <a href="index.php">vuelva a intenarlo</a>.<br/>';
  }

?>