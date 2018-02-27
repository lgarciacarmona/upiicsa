<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM staff WHERE id = '$id'";
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
				<h3 style="text-align:center">MODIFICAR REGISTRO STAFF</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="updatestaff.php" autocomplete="off">
			    <div class="form-group">
					<label for="boleta" class="col-sm-2 control-label">Boleta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="boleta" name="boleta" placeholder="Boleta" value="<?php echo $row['boleta']; ?>" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="secuencia" class="col-sm-2 control-label">Secuencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="secuencia" name="secuencia" placeholder="Secuencia" value="<?php echo $row['secuencia']; ?>"  required>
					</div>
				</div>
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']; ?>" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="funcion" class="col-sm-2 control-label">Funcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="funcion" name="funcion" placeholder="Funcion" value="<?php echo $row['funcion']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="staff.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>