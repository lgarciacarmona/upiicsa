<?php
	include 'plantillahorizontal.php';
	require 'conexion.php';
	
	$query = "SELECT id, boleta,nombre, correo, carrera, conferencia FROM alumnos";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('L','mm','A4');//orientacion de la hoja 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(0, 170, 74);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
    $pdf->Cell(20,6,'BOLETA',1,0,'C',1);
	$pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(50,6,'CORREO',1,0,'C',1);
    $pdf->Cell(50,6,'CARRERA',1,0,'C',1);
    $pdf->Cell(50,6,'CONFERENCIA',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,$row['id'],1,0,'C');
        $pdf->Cell(20,6,$row['boleta'],1,0,'C');
		$pdf->Cell(50,6,$row['nombre'],1,0,'C');
		$pdf->Cell(50,6,$row['correo'],1,0,'C');
        $pdf->Cell(50,6,$row['carrera'],1,0,'C');
        $pdf->Cell(50,6,$row['conferencia'],1,1,'C');
	}
	$pdf->Output();
?>


//'D' para descargar//
