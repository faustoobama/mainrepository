<?php

require('Tablero.php');
    $op = fopen('jugadas.csv','r');

while (!feof($op)) {
    $datos .= fgets($op);
}

$juegoArr = explode(';',$datos);

foreach ($juegoArr as $value) {
    echo $value."<br>";
}

$juego = new Tablero();

$juego->printTablero();

if($_POST['jugar']){
    $turno = $_POST['turno'];
    $x = $_POST['x'];
    $y = $_POST['y'];

    $file = 'jugadas.csv';

    $cont = file_get_contents($file);

    $cont .=  $turno.";".$x.";".$y."\n";

    file_put_contents($file,$cont);

}

?>