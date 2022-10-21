<?php

require("Coche.php");

$cuenta1 = new CuentaBancaria("Lucer Cito W.",100000);
$cuenta2 = new CuentaBancaria("Rederick Destro",200000);

echo $cuenta1->mostrar();
echo $cuenta2->mostrar();

$cuenta1->transferirA($cuenta2,3000);

echo $cuenta1->mostrar();
echo $cuenta2->mostrar();

$cuenta1->unirCon($cuenta2);

echo $cuenta1->mostrar();
echo $cuenta2->mostrar();
?>