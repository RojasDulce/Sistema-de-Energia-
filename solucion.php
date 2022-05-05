<?php //solucion.com

$horas = (int) $_POST['p'];
$p = $horas/24;

$wats = 0.809;

$resultado= $wats*$p;

echo "<br/> &nbsp; El total de dinero es ". $resultado. " al mes";

?>
