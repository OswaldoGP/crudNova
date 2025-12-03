<?php


 	function conexion(){
		
		$host =  "localhost";

		$usuario = "admin";//root

		$password = "roldanroot";

		$base = "a231190101";

		$conexion = mysqli_connect(

		$host, $usuario, $password, $base
		);
		return $conexion;
	}





?>