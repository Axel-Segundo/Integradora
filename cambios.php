<?php
$host="localhost";
$usu="root";
$pas="";
$bd="controlutt";

$liga=mysql_connect($host, $usu, $pas) or die("parametros de conexion incorrectos");
mysql_select_db($bd,$liga);


$query="select * from discost";
$res=mysql_query($query);
?>

<html>
<HEAD>
   <TITLE>ACTUALIZACION</TITLE>
 </HEAD>
<H1> <CENTER>ACTUALIZACION a registros</CENTER></H1>
<hr>
<H3> SELECIONE LA IP:</H3>

<form method="get" action="actualizar.php">
<select name="ID">
<?php
	while($fila=mysql_fetch_array($res))
	{
		echo "<option value='".$fila[0]."'>".$fila[0]."</option>";	
	}

?>
</select>

<INPUT type=submit name="e1" value="LOCALIZAR">	


<br>
<br><B><FONT SIZE=+1><A HREF='uno.HTML'> MENU PRINCIPAL </A></FONT></B>



</form>
