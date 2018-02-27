<?php
	//Incluimos librería y archivo de conexión
	require 'Classes/PHPExcel.php';
	require 'conexion.php';
	
	//Consulta
	$sql = "SELECT id, nombre, correo, telefono, ponencia, academia FROM personas";
	$resultado = $mysqli->query($sql);
	$fila = 2; //Establecemos en que fila inciara a imprimir los datos
	
	//Objeto de PHPExcel
	$objPHPExcel  = new PHPExcel();
	
	//Propiedades de Documento
	$objPHPExcel->getProperties()->setCreator("UPIICSA")->setDescription("Reporte de Eventos");
	
	//Establecemos la pestaña activa y nombre a la pestaña
	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Asistencias");
	
	$objPHPExcel->getActiveSheet()->setCellValue('A1','ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1','NOMBRE');
	$objPHPExcel->getActiveSheet()->setCellValue('C1','CORREO');
	$objPHPExcel->getActiveSheet()->setCellValue('D1','TELEFONO');
    $objPHPExcel->getActiveSheet()->setCellValue('E1','PONENCIA');
	$objPHPExcel->getActiveSheet()->setCellValue('F1','ACADEMIA');
	
	
	//Recorremos los resultados de la consulta y los imprimimos
	while($rows = $resultado->fetch_assoc()){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['id']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['nombre']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['correo']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $rows['telefono']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $rows['ponencia']);
        $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $rows['academia']);
		
		$fila++; //Sumamos 1 para pasar a la siguiente fila
	}	
	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Asistencia.xlsx"');
	header('Cache-Control: max-age=0');
   $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
	
	$objWriter->save('php://output');
?>