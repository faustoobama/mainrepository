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
            echo "<td rowspan=".$f." class='lyel'>".$e."</td>";    
            break;
        case "EIE":
            echo "<td rowspan=".$f." class='yel'>".$e."</td>";    
            break;
        case "DWES":
            echo "<td rowspan=".$f." class='blue'>".$e."</td>";    
            break;
        case "ITGS":
            echo "<td rowspan=".$f." class='blue'>".$e."</td>";    
            break;
        case "DIW":
            echo "<td rowspan=".$f." class='pink'>".$e."</td>";    
            break;

        case "DAW":
            echo "<td rowspan=".$f." class='purp'>".$e."</td>";    
            break;

        default:
            echo "<td rowspan=".$f." class='any'>".$e."</td>";    
            break;
    }
}

function printHorario(){
    global $horario;
    $longFilas=count($horario);
    $longCols=count($horario[0]);
    $repet;
    $rowspan=1;

    for($cols=0; $cols < $longCols; $cols++){
        echo "<tr>";
        for($fila=0; $fila < $longFilas; $fila++){

            if($cols < 4){
                if($cols == 1 && $horario[$fila][$cols] == $horario[$fila][$cols+$rowspan]){
                    if($horario[$fila][$cols] == $horario[$fila][$cols+$rowspan+1]){
                        $rowspan=3;
                        //echo "<td rowspan=".$rowspan.">".$horario[$fila][$cols]."</td>";
                        printTd($horario[$fila][$cols],$rowspan);
                    }else {
                        $rowspan=2;
                        //echo "<td rowspan=".$rowspan.">".$horario[$fila][$cols]."</td>";
                        printTd($horario[$fila][$cols],$rowspan);
                    }
                    $rowspan=1;
            
                }else{

                    if($horario[$fila][$cols] != $horario[$fila][$cols-1]){

                        if($horario[$fila][$cols] == $horario[$fila][$cols+1]) {
                            //echo "<td rowspan='2'>".$horario[$fila][$cols]."</td>";
                            printTd($horario[$fila][$cols],2);
                            
                        }else{
                            //echo "<td rowspan='1'>".$horario[$fila][$cols]."</td>";
                            printTd($horario[$fila][$cols],1);
                        }
        
                    }

                }
                
            }else{
                // if($cols == 5 && $horario[$fila][$cols] == $horario[$fila][$cols+$rowspan]){
                //     $rowspan++;
                //     if($horario[$fila][$cols] == $horario[$fila][$cols+$rowspan]){
                //         $rowspan++;
                //     }
                // }else{
                //     if($rowspan < $cols-4){
    
                //         if($cols != 4){
                //             echo "<td rowspan=".$rowspan.">".$horario[$fila][$cols]."</td>";
                //         }else{
                //             if($fila == 0) echo "<td colspan='5'>".$horario[$fila][$cols]."</td>";
                //         }
    
                //     }
                // }

                if($cols == 5 && $horario[$fila][$cols] == $horario[$fila][$cols+$rowspan]){
                    if($horario[$fila][$cols] == $horario[$fila][$cols+$rowspan+1]){
                        $rowspan=3;
                        //echo "<td rowspan=".$rowspan.">".$horario[$fila][$cols]."</td>";
                        printTd($horario[$fila][$cols],$rowspan);
                    }else {
                        $rowspan=2;
                        //echo "<td rowspan=".$rowspan.">".$horario[$fila][$cols]."</td>";
                        printTd($horario[$fila][$cols],$rowspan);
                    }
                    $rowspan=1;
            
                }else{

                    if($horario[$fila][$cols] != $horario[$fila][$cols-1]){

                        if($horario[$fila][$cols] == $horario[$fila][$cols+1]) {
                            printTd($horario[$fila][$cols],2);
                        }else{
                            echo ($cols !=4 )
                            ? printTd($horario[$fila][$cols],1)
                            : (($fila == 0) ? "<td colspan='5'>".$horario[$fila][$cols]."</td>": "");
                        }
        
                    }

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
            border-collapse: collapse;
        }
        td{
            padding: 10px 30px;
            border: 1px solid black;
        }

        .lyel{
            background: yellow;
        }
        .yel{
            background: yellow;
        }
        .blue{
            background: blue;
        }
        .purp{
            background: purple;
        }
        .pink{
            background: pink;
        }
    </style>
</head>
<body>
    <table>
        <?php
            printHorario();
        ?>
    </table>
</body>
</html>