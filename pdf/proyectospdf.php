<?php
	include 'plantillahorizontal.php';
	require 'conexion.php';
	
	$query = "SELECT id, nombre, grupo, correo, horario, profesor FROM proyectos";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('L','mm','A4');//orientacion de la hoja 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(0, 170, 74);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'ID',1,0,'C',1);
	$pdf->Cell(20,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'GRUPO',1,0,'C',1);
	$pdf->Cell(50,6,'CORREO',1,0,'C',1);
    $pdf->Cell(50,6,'HORARIO',1,0,'C',1);
    $pdf->Cell(50,6,'PROFESOR',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,$row['id'],1,0,'C');
		$pdf->Cell(20,6,$row['nombre'],1,0,'C');
		$pdf->Cell(50,6,$row['grupo'],1,0,'C');
        $pdf->Cell(50,6,$row['correo'],1,0,'C');
        $pdf->Cell(50,6,$row['horario'],1,0,'C');
        $pdf->Cell(50,6,$row['profesor'],1,1,'C');
	}
	$pdf->Output();
?>


//'D' para descargar//
