<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM proyectos WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updatepro.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="grupo" class="col-sm-2 control-label">Grupo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="grupo" name="grupo" placeholder="Grupo" value="<?php echo $row['grupo']; ?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="correo" class="col-sm-2 control-label">Correo</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="horario" class="col-sm-2 control-label">Horario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="horario" name="horario" placeholder="Horario" value="<?php echo $row['horario']; ?>" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="profesor" class="col-sm-2 control-label">Profesor</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="profesor" name="profesor" placeholder="Profesor" value="<?php echo $row['profesor']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="proyecto.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>