<?php
	include 'plantillahorizontal.php';
	require 'conexion.php';
	
	$query = "SELECT id, nombre, correo, telefono, ponencia, academia FROM personas";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('L','mm','A4');//orientacion de la hoja 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(0, 170, 74);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(15,6,'ID',1,0,'C',1);
    $pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'CORREO',1,0,'C',1);
    $pdf->Cell(25,6,'TELEFONO',1,0,'C',1);
    $pdf->Cell(50,6,'PONENCIA',1,0,'C',1);
    $pdf->Cell(50,6,'ACADEMIA',1,1,'C',1);
    
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(15,6,$row['id'],1,0,'C');
		$pdf->Cell(50,6,$row['nombre'],1,0,'C');
        $pdf->Cell(50,6,$row['correo'],1,0,'C');
        $pdf->Cell(25,6,$row['telefono'],1,0,'C');
        $pdf->Cell(50,6,$row['ponencia'],1,0,'C');
        $pdf->Cell(50,6,$row['academia'],1,1,'C');
	    
	}
	$pdf->Output();
?>


//'D' para descargar//
///P horientacion vertical, L horientacion horizontal//
