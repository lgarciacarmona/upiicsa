<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
    $grupo = $_POST['grupo'];
	$correo = $_POST['correo'];
	$horario = $_POST['horario'];
    $profesor = $_POST['profesor'];
	
	$sql = "INSERT INTO proyectos (nombre, grupo, correo, horario, profesor) VALUES ('$nombre', '$grupo', '$correo', '$horario', '$profesor')";
    //echo $sql; para ver codigos de error//
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="proyecto.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
