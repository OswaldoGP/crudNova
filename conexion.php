<?php
class Conexion {
    public function conectar(){
        $host = "localhost";
        $usuario = "admin"; 
        $password = "roldanroot";
        $base = "a231190101";

        $conexion = mysqli_connect($host, $usuario, $password, $base);

        if (!$conexion) {
            die("Error conexión: " . mysqli_connect_error());
        }
        return $conexion;
    }
}


function conexion(){
    $obj = new Conexion();
    return $obj->conectar();
}
?>
