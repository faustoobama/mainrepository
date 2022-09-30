<?php

// 1 Jorge (Profe)
// Funciones: array_walk, array_map, array_filter, array_reduce

// Utiliza alguna de las funciones para generar un array de cadenas indicando el nombre de la persona y cómo tratarle con formalidad. Si el valor entero detrás del nombre es un 1 Hay que poner "Señor <nombre>", si es 0 hay que poner "Señora <nombre>"

// $resultado = ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];

// --
    
// Utiliza la función map_reduce para calcular la cantidad de calorías de la comida anterior.

// --

// Con el array de personas anterior, utiliza el array_filter para sacar un listado de Hombre y otro listado de mujeres.

$personas = [
    ["Jorge", 1],
    ["Bea", 0],
    ["Paco", 1],
    ["Amparo", 0],
];

$comida = [
    0 => ["Banana", 3, 56],
    1 => ["Chuleta", 1, 256],
    2 => ["Pan", 1, 90]
];
function tutear($e){
    return ($e[1] == 1)? "Señor $e[0]": "Señora $e[0]";
}
function calcCalorias($carreo, $e)
{
    $calorias = $e[1]*$e[2];

    $carreo += $calorias;

    return $carreo;
}

// Resultado ["Señor Jorge", "Señora Bea", "Señor Paco", "Señora Amparo"];

var_dump(array_map("tutear",$personas));

echo "\n --------------- \n ";

// Resultado en kilocalorias

var_dump(array_reduce($comida, "calcCalorias")." Kalorias");

?>