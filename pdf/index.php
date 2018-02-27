<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT nombre, id, intereses,correo FROM personas";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('P','mm','A4');//orientacion de la hoja 
    //header("Content-Type: text/html; charset=iso-8859-1 "); acentos y Ñ 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(0, 170, 74);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(50,6,'nombre',1,0,'C',1);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(50,6,'correo',1,0,'C',1);
    $pdf->Cell(50,6,'intereses',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(50,6,$row['nombre'],1,0,'C');
		$pdf->Cell(20,6,$row['id'],1,0,'C');
		$pdf->Cell(50,6,$row['correo'],1,0,'C');
        $pdf->Cell(50,6,$row['intereses'],1,1,'C');
	}
    
	$pdf->Output();
?>


//'D' para descargar//
///P horientacion vertical, L horientacion horizontal//
