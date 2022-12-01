<?php
$servidor = "localhost";
$basedatos = "productos";
$usuario = "root";
$pass = "";
$con = mysqli_connect($servidor,$basedatos,$usuario,$pass) or die("No se pudo conectar a localhost");
$consulta = "select * from barberproductos";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");
$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);
?>