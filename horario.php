<?php

$horario=[
    0 => ["Lunes", "DWEC", "DWEC", "DEWC", "DESCANSO", "EIE", "EIE", "ITGS"],
    1 => ["Martes", "ITGS", "DAW", "DAW", "DESCANSO", "DIW", "DIW", "DIW"],
    2 => ["Miercoles", "DAW", "DAW", "DAW", "DESCANSO", "DWES", "DWES", "DWES"],
    3 => ["Jueves", "EIE", "DAW", "DAW", "DESCANSO", "DWES", "DWES", "DWES"],
    4 => ["Viernes", "DWES", "DWES", "DWES", "DESCANSO", "DWEC", "DWEC", "DWEC"]
];

$laTabla="";

$longCols=count($horario);
$longFilas=count($horario[0]);

for($cols=0; $cols < $longFilas; $cols++){
    for($fila=0; $fila < $longCols; $fila++){
        if($cols != 4){
            echo $horario[$fila][$cols]." <span>&nbsp;</span>";
        }
    }
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
</head>
<body>
    <table>

    </table>
</body>
</html>