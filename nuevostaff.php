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
				<h3 style="text-align:center">NUEVO REGISTRO PARA STAFF</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardarstaff.php" autocomplete="off">
			<div class="form-group">
					<label for="boleta" class="col-sm-2 control-label">Boleta</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="boleta" name="boleta" placeholder="Boleta" required>
					</div>
				</div>
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="secuencia" class="col-sm-2 control-label">Secuencia</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="secuencia" name="secuencia" placeholder="Secuencia" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="fecha" class="col-sm-2 control-label">Fecha</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
					</div>
				</div>
				
				<div class="form-group">
					<label for="funcion" class="col-sm-2 control-label">Funcion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="funcion" name="funcion" placeholder="Funcion">
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