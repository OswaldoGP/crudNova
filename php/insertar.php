<?php 
require_once "conexion.php";
$conexion = conexion();

$nombre = $_POST['nombrej'];
$anio = $_POST['anioj'];
$empresa = $_POST['empresaj'];

$sql = "CALL sp_insertar_datos('$nombre','$anio','$empresa')";
$result = mysqli_query($conexion, $sql);

mysqli_next_result($conexion);

echo $result ? 1 : 0;
