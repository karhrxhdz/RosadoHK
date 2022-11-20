<?php

include("conexion.php");

$nombre = "Pedro Lopez";
$servicio = "Corte y ceja";
$barbero = "Hugo Ramza";
$total = "210";

mysqli_query($conexion, "INSERT INTO citas (nombre,serviciosolicitado,barbero,total) values('$nombre','$servicio','$barbero','$total')");

?>