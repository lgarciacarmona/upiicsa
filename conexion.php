<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'personal');
   
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
    ///decodificacion para ñ y acentos cambio de cotejamiento
    mysqli_set_charset($mysqli,"utf8");

?>