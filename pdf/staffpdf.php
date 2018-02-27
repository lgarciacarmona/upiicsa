<?php
	include 'plantillahorizontal.php';
	require 'conexion.php';
	
	$query = "SELECT id, boleta, nombre, secuencia, fecha, funcion FROM staff";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('L','mm','A4');//orientacion de la hoja 
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(0, 170, 74);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(15,6,'ID',1,0,'C',1);
    $pdf->Cell(50,6,'BOLETA',1,0,'C',1);
    $pdf->Cell(50,6,'NOMBRE',1,0,'C',1);
    $pdf->Cell(50,6,'SECUENCIA',1,0,'C',1);
    $pdf->Cell(25,6,'FECHA',1,0,'C',1);
    $pdf->Cell(50,6,'FUNCION',1,1,'C',1);
    
    
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(15,6,$row['id'],1,0,'C');
		$pdf->Cell(50,6,$row['boleta'],1,0,'C');
        $pdf->Cell(50,6,$row['nombre'],1,0,'C');
        $pdf->Cell(50,6,$row['secuencia'],1,0,'C');
        $pdf->Cell(25,6,$row['fecha'],1,0,'C');
        $pdf->Cell(50,6,$row['funcion'],1,1,'C');
	    
	}
	$pdf->Output();
?>


//'D' para descargar//
///P horientacion vertical, L horientacion horizontal//
