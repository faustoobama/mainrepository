<?php
$parrafo = <<<EOF
En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo 
científico acerca de los fotones de luz y sus propiedades Bose describe ciertas reglas para 
determinar si dos fotones deberían considerarse idénticos o diferentes Esta se llama 
la condensado de Bose - Einstein Einstein aplica estas reglas a los átomos preguntándose 
cómo se comportarían los átomos de un gas si se les aplicasen estas reglas 
EOF;

$parrafoArray = explode(" ",$parrafo);

// print_r($parrafoArray);

$found = in_array("Satyendra",$parrafoArray);

// $found = array_filter($parrafoArray, function($abuscar){return ("Satyendra" == $abuscar);});



// Apartado de frase unica

$frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";

$fraseArr = explode(", ",$frase);

$fraseUnica = array_unique($fraseArr);

print_r($frase);

print("<br>");

array_map(function($e){echo $e.", ";}, $fraseUnica);

?>