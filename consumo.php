<?php
$connection=mysql_connect("localhost","root","","energy") or die ("no se encuentra el servidor");
/*$db=mysql_select_db ("energy, $connection")or die ("error de conexion");*/
$producto=$_POST['aparato'];
echo $producto;
echo"<br>";
$tiempo=$_POST['consumo'];
echo $tiempo;
echo"<br>";

	mysql_query("INSERT INTO aparato ('aparatos','consumo') VALUES ($producto,$tiempo)",$connection);
    echo"registro completo";
?>