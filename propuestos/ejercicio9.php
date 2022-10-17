<?php

$nombre = "Fausto Obama";
$apellidos = "Ngomo Afang";


function intercambiador(mixed &$val, mixed &$theval){
    $storage = $val;
    $val = $theval;
    $theval = $storage;
}

print("Valores antes del cambio \n Nombre: $nombre \n Apellido: $apellidos");

intercambiador($nombre,$apellidos);

print("\nValores despues del cambio \n Nombre: $nombre \n Apellido: $apellidos");

?>