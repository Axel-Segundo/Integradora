<?php

$host="localhost";
$usu="root";
$pas="";
$bd="controlutt";

$liga=mysql_connect($host, $usu, $pas) or die("parametros de conexion incorrectos");
mysql_select_db($bd,$liga);

$id=$_GET["ID"];

$result=mysql_query("SELECT * FROM discost WHERE id=$id",$liga);

  $row=mysql_fetch_array($result);

        

  echo "<h3> ... REGISTRO ENCONTRADO ...</h3>";
  echo "<h3> Corregir la informacion Necesaria: </h3>";

  echo "ID: ".$row[0];
  echo "<br>";

  echo"

  <html>
  <head>
   <title>ACTUALIZAR DATOS</title>
   </head>
  <body>
  
  <br>
  <form action='hacer.php?accion=hacer' method='POST'>

   <input type='hidden'  value='$row[0]' name='ID' >

   Nombre Disco :<br>
  <input type='text' value='$row[1]' name='Id_Usuario'><br>
   ID:<br>
  <input type='text' value='$row[2]' name='Usuario'><br>
   Usuario:<br>
  <input type='text' value='$row[3]' name='Contraseña'><br>
   Contraseña:<br>
   
  
  <input type='submit' value='Guardar'>
  

  </form>
  </body>
  </html>
  ";

   mysql_close($liga);
   echo "<A HREF='index.php'> Regresar a MENU PRINCIPAL</A>";
   echo "<br>";
   echo "<A HREF='cambios.php'> Regresar </A>";



?>