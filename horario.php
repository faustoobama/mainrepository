<?php

$horario=[
    0 => ["Lunes", "DWEC", "DWEC", "DWEC", "DESCANSO", "EIE", "EIE", "ITGS"],
    1 => ["Martes", "ITGS", "DAW", "DAW", "DESCANSO", "DIW", "DIW", "DIW"],
    2 => ["Miercoles", "DIW", "DIW", "DIW", "DESCANSO", "DWES", "DWES", "DWES"],
    3 => ["Jueves", "EIE", "DAW", "DAW", "DESCANSO", "DWES", "DWES", "DWES"],
    4 => ["Viernes", "DWES", "DWES", "DWES", "DESCANSO", "DWEC", "DWEC", "DWEC"]
];

function printTd($e,$f){
    switch($e){
        case "DWEC":
            echo "<td rowspan=".$f." class='lyellow'>".$e."</td>";
        break;
        case "DWES":
            echo "<td rowspan=".$f." class='blue'>".$e."</td>";
        break;
        case "EIE":
            echo "<td rowspan=".$f." class='yellow'>".$e."</td>";
        break;
        case "ITGS":
            echo "<td rowspan=".$f." class='blue'>".$e."</td>";
        break;
        case "DAW":
            echo "<td rowspan=".$f." class='purple'>".$e."</td>";
        break;
        case "DIW":
            echo "<td rowspan=".$f." class='pink'>".$e."</td>";
        break;
        default:
        echo "<td rowspan=".$f." class='rown'>".$e."</td>";

    }
}

function printHorario(){
    global $horario;
    $longFilas=count($horario);
    $longCols=count($horario[0]);
    $rowspan=1;

    for($cols=0; $cols < $longCols; $cols++){
        echo "<tr>";
        for($fila=0; $fila < $longFilas; $fila++){

                if(($cols == 5 || $cols == 1) && $horario[$fila][$cols] == $horario[$fila][$cols+$rowspan]){
                    if($horario[$fila][$cols] == $horario[$fila][$cols+$rowspan+1]){
                        $rowspan=3;
                        printTd($horario[$fila][$cols],$rowspan);
                    }else {
                        $rowspan=2;
                        printTd($horario[$fila][$cols],$rowspan);
                    }
                    $rowspan=1;
            
                }else{

                    if($horario[$fila][$cols] != $horario[$fila][$cols-1]){

                        if($horario[$fila][$cols] == $horario[$fila][$cols+1]) {
                            $rowspan++;
                            printTd($horario[$fila][$cols],$rowspan);
                        }else{
                            echo ($cols !=4 )
                            ? printTd($horario[$fila][$cols],1)
                            : (($fila == 0) ? "<td colspan='5' class='brown'>".$horario[$fila][$cols]."</td>": "");
                        }
                        $rowspan=1;
        
                    }

                }

        }
        echo "</tr>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    <style>
        *{
            text-align: center;
        }
        table{
            color: #00000099;
            box-shadow: 0 0 10px grey;
            border-collapse: collapse;
            width: 1000px;
            height: 350px;
            margin: 80px auto;
        }
        td{
            padding: 10px 60px;
            width: 100px;
            height: 25px;
            border: 3px solid white;
        }
        .lyellow{background: #FFFFB8FF;}
        .yellow{background: #FFF370FF;}
        .blue{background: #78C6FFFF;}
        .pink{background: #FF8FE6FF;}
        .purple{background: #BC87FFE0;}
        .brown{background: #E6F7FFE0;}
        .rown{background: #FFC6BDE0;}
    </style>
</head>
<body>
    <table>
        <?php printHorario(); ?>
    </table>
</body>
</html>