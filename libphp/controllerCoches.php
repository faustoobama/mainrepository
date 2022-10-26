<?php
require_once("Coche.php");
require("CocheConRemolque.php");
require("CocheGrua.php");

$coche1 = new Coche("KN-555-G","KARIM","200kg");
echo $coche1->pintarInformacion()."<br>";
$coche2 = new CocheConRemolque("WN-125-N","BENZEMA","5000Kg","20000kg");
echo $coche2->pintarInformacion()."<br>";
$coche3 = new CocheGrua();
echo $coche3->pintarInformacion()."<br>";
$coche3->cargar($coche1);
echo $coche3->pintarInformacion()." ".$coche3->getCarga()."<br>";

?>