<?php

$conjuntoA =[1,2,8,12,3,4,5];

$conjuntoB =[5,4,3,9,11,2,1];

$coincidencias = array_intersect($conjuntoA,$conjuntoB);

print_r($coincidencias);

print("<br>");

//$valores = [0 => 22, 5 => 99];

$noCoinciden = array_diff($conjuntoA,$conjuntoB);

print_r($noCoinciden);

print("<br>");

$resultBusqueda = array_search(1,$coincidencias);


print("El valor se encuentra en el indice: ".$resultBusqueda);

?>

