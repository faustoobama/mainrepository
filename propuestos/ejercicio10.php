<?php

function creadorArray($length=10, $end=false,$start=false){
    for($i = 0; $i < $length; $i++){
        if($end){
            if($start){
                $arreglo[$i] = mt_rand($start,$end);
            }else{
                $arreglo[$i] = mt_rand(0,$end);
            }
        }else $arreglo[$i] = mt_rand(0,10);   
    }
    return $arreglo;
}

$miArrayDefault = creadorArray();

$miArrayDeCinco = creadorArray(5);

$miArrayDeSiete = creadorArray(7,3);

$miArrayDeNueveBinario = creadorArray(7,1,0);

var_dump($miArrayDefault);
var_dump($miArrayDeCinco);
var_dump($miArrayDeSiete);
var_dump($miArrayDeNueveBinario);
?>