<?php 
require_once "conexion.php";
$conexion = conexion();

$id = $_POST['idjuego'];
$sql = "CALL sp_eliminar_datos('$id')";
$result = mysqli_query($conexion, $sql);

mysqli_next_result($conexion);

echo $result ? 1 : 0;
