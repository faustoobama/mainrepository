<?php

require "./lib/fpdf/fpdf.php";

$empleado = $_GET['nombre'];
$empresa = $_GET['empresa'];
$represent = $_GET['representante'];
$fecha = $_GET['fecha'];

$intro = "Me permito informarle de que conozco amplia y detalladamente al señor $empleado y puedo asegurar que es una persona integra, estable, totalmente responsable y apto para cualquier tipo de actividad que se le encomiende.";
$exper = "Ha estado trabajando con nosotros en $empresa , como Asesor en Tecnologías de la Información, durante 5 años.";
$desen =  <<<EOS
No dude en ponerse en contacto conmigo si desea hablar más sobre las cualificaciones y experiencia del empleado $empleado. Con gusto ampliaré mis recomendaciones.

Reciba un cordial saludo
Atentamente 
$represent
Representante legal de $empresa
EOS;

$fpdf = new FPDF('P','mm',array(200,250));
$fpdf->AddPage();

//Establecemos los márgenes izquierda, arriba y derecha:
$fpdf->SetMargins(20, 25 , 20);

//Establecemos el margen inferior:
$fpdf->SetAutoPageBreak(true,25);

// config document
$fpdf->SetTitle('Carta de Recomendacion');
$fpdf->SetAuthor('Fausto Obama');
$fpdf->SetCreator('FPDF Maker');

// add title
$fpdf->SetFont('Helvetica', 'B', 24);
$fpdf->Cell(0, 15, utf8_decode('Carta de Recomendación'), 0, 1, 'C');
$fpdf->Ln();

// add text
$fpdf->SetFont('Arial', '', 12);
$fpdf->MultiCell(0, 9, utf8_decode($intro), 'J');
$fpdf->Ln();
$fpdf->MultiCell(0, 9, utf8_decode($exper), 'J');
$fpdf->Ln();
$fpdf->MultiCell(0, 9, utf8_decode($desen), 'J');
$fpdf->Ln();

// firma
$fpdf->SetXY(150,190);
$fpdf->SetFont('Arial', 'B', 10);
$fpdf->Cell(40, 10, 'Firma: ', 0, 1, 'L');

// grafo
$fpdf->Image('./firma.png', 140, 200, 30);

// fecha
$fpdf->SetY(210);
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(70, 10, 'En      Madrid       a      '.$fecha, 0, 1, 'L');

// add image
$fpdf->Image('./logo.png', 17, 6, 20);


// output file
$fpdf->Output('', 'fpdf-complete.pdf');
?>

