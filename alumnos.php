<?php
	require 'conexion.php';
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#talumnos').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_processalum.php"
				});	
			});
			
		</script>
		
	</head>
	
	<body>
		<div class="container">
			<!-- encabezado -->
			<div class="row table-responsive">
		<IMG SRC="images/ipn.png"WIDTH=178 HEIGHT=180 BORDER=2 VSPACE=3 HSPACE=3 align="left">
		<IMG SRC="images/cartel.jpg"WIDTH=700 HEIGHT=400 BORDER=2 VSPACE=3 HSPACE=3 align="center">
		
		<IMG SRC="images/upiicsa.png"WIDTH=178 HEIGHT=180 BORDER=2 VSPACE=3 HSPACE=3 align="right" >
		<div class="container">
			<div class="row">
				
				<h3 style="text-align:center">Regisro de alumnos participantes en conferencias</h3>
			</div>
		
			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<a href="nuevoalum.php" class="btn btn-primary">Registro Alumnos </a>
						
				       <!---imprimir pdf---->
				    <a href="excel/reportealu.php" class="btn btn-primary">Generar EXCEL</a>
				    <a href="pdf/alumnospdf.php" class="btn btn-primary">Generar PDF</a>
				    
				    <!---borrar tabla--->
				    
				    
				    <a href="eliminartablasalum.php" class="btn btn-primary">Borrar tabla</a>
				    <!---regresar--->
				    
				    <a href="index.php" class="btn btn-default">Regresar</a>
					</div>
				</div>
			/
			<br>
			
			<div class="row table-responsive">
			<table class="table table.striped">
				<table class="display" id="talumnos">
					<thead>
						<tr>
							<th>ID</th>
							<th>Boleta</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Carrera</th>
							<th>Conferencias</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<td>
                            <a href="modificaralum.php?id=<?php echo $row['id'];?>"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tbody>
				</table>
				</table>
			</div>
		</div>
		
				
				
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Aceptar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	