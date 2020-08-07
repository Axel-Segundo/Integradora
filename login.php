<?php
  session_start();

  // Obtengo los datos cargados en el formulario de login.
  $usuario= $_POST['usuario'];
  $password = $_POST['password'];
  
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($usuario == 'axel117' && $password == 'quake10350'){
	// Guardo en la sesión el email del usuario.
	$_SESSION['usuario'] = $usuario;
	
	// Redirecciono al usuario a la página principal del sitio.
	header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: contenido_profesor.php"); 
  }else{
	echo 'El usuario o contraseña es incorrecto, <a href="index.php">vuelva a intenarlo</a>.<br/>';
  }

?>