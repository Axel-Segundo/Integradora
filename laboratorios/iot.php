<?php 
session_start();
// Controlo si el usuario ya está logueado en el sistema.
if(isset($_SESSION['usuario'])){
}else{
  // Si no está logueado lo redireccion a la página de login.
  header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: ../index.php"); 
}
require "viewsLab/iot.view.php";
?>