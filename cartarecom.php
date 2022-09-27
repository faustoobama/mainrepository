<?php

require "./lib/fpdf/fpdf.php";

$fpdf = new FPDF();
$fpdf->AddPage();

// config document
$fpdf->SetTitle('Carta de Recomendacion');
$fpdf->SetAuthor('Fausto Obama');
$fpdf->SetCreator('FPDF Maker');

// add title
$fpdf->SetFont('Arial', 'B', 24);
$fpdf->Cell(0, 10, utf8_decode('Carta de Recomendación'), 0, 1, 'C');
$fpdf->Ln();

// add text
$fpdf->SetFont('Arial', '', 12);
$fpdf->MultiCell(0, 7, utf8_decode('Los archivos PDF se utilizan ampliamente en documentos y reportes que necesitan mantener el diseño y contenido (imágenes, tipos de letra, colores, etc), por ello vamos a aprender a crear archivos PDF utilizando PHP.'), 0, 1);
$fpdf->Ln();
$fpdf->MultiCell(0, 7, utf8_decode('FPDF es una clase PHP que permite la generación de archivos PDF de forma sencilla y sin necesidad de instalar librerías adicionales, cuenta con métodos bien documentados que facilitan su uso.'), 0, 1);
$fpdf->Ln();
$fpdf->MultiCell(0, 7, utf8_decode('Antes de comenzar lo primero es descargar FPDF e incluir los archivos necesarios en nuestro proyecto.'), 0, 1);
$fpdf->Ln();

// firma
$fpdf->SetXY(140,110);
$fpdf->SetFont('Arial', 'B', 12);
$fpdf->Cell(20, 10, 'Firma: ', 0, 1, 'L');

// add image
//$fpdf->Image('assets/fpdf-code.png', null, null, 180);

// output file
$fpdf->Output('', 'fpdf-complete.pdf');
?>

