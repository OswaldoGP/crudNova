<?php 
require_once "conexion.php";
$conexion = conexion();

$id_juego = $_POST['id_juego'];
$nombre = $_POST['nombrejU'];
$anio = $_POST['aniojU'];
$empresa = $_POST['empresajU'];

$sql = "CALL sp_actualizar_datos('$nombre','$anio','$empresa','$id_juego')";
$result = mysqli_query($conexion, $sql);

mysqli_next_result($conexion);

echo $result ? 1 : 0;
