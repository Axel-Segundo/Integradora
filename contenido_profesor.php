<?php 

session_start();

// Controlo si el usuario ya está logueado en el sistema.
if(isset($_SESSION['usuario'])){
  // Le doy la bienvenida al usuario.
  echo 'Bienvenido <strong>' . $_SESSION['usuario'] . '</strong>, <a href="views/cerrar-sesion.php">cerrar sesión</a>';
}else{
  // Si no está logueado lo redireccion a la página de login.
  header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: index.php"); 
}


require 'views/inicioprofesor.view.php';

?>