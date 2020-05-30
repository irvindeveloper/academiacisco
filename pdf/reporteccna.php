<?php
require('fpdf/fpdf.php');
require('../modelo/conexion.php');
require('../modelo/modestudiantes.php');

	$pdf=new fpdf('p','mm','Letter');
	$pdf->addpage('p');
	$pdf->setfont('courier','b',14);
	$pdf->cell(700,10,'lista de estudiantes de CCNA',0,0,'c');
	$pdf->Ln(10);
	$pdf->setfillcolor(110,150,210);
	$pdf->cell(8,10,'Id',1,0,'c',1);
	$pdf->cell(20,10,'nombre',1,0,'c',1);
	$pdf->cell(30,10,'apellido',1,0,'c',1);
	$pdf->cell(40,10,'certificacion',1,0,'c',1);
	$pdf->cell(20,10,'modulo',1,0,'c',1);
	//$pdf->cell(5,10,'ciclo',1,0,'c',1);
	$pdf->Ln(10);
	
	$oestudiante = new estudiante();
	$registros = $oestudiante->ccna($cnn);
	while($fila=$registros->fetch_array())
	{
		$pdf->cell(8,10,$fila['idEstudiantes'],0,0,'c');
		$pdf->cell(20,10,$fila['Nombre'],0,0,'c');
		$pdf->cell(30,10,$fila['Apellido'],0,0,'c');
		$pdf->cell(40,10,$fila['Certificacion'],0,0,'c');
		$pdf->cell(20,10,$fila['Modulo'],0,0,'c');
		//$pdf->cell(5,10,$fila['Ciclo'],0,0,'c');
		$pdf->Ln(10);
	}
	$pdf->output('reporteccna.pdf','D');
	
	
?>