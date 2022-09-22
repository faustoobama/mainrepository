<?php

$cadena = $_GET["cadena"];

function cantVocCons(){
    global $cadena;
    $numVocales=0;
    $numCons=0;

    for($i=0;$i<strlen($cadena);$i++){
        (preg_match('/[aeiouáéíóúü]/i',$cadena[$i]))
        ?$numVocales++
        :((preg_match('/[ ]/',$cadena[$i]))?$numCons=$numCons:$numCons++);
    }

    return ["voc"=>$numVocales,"cons"=>$numCons];
}
function esPalindromo(){
    global $cadena;
    $resultado;

    do{
        $resultado=($cadena[$i]==$cadena[strlen($cadena) - 1 - $i]);
    }
    while($cadena[$i] == $cadena[strlen($cadena) - 1 - $i] && $i < $cadena[strlen($cadena)]);

    return ($resultado==1)?"Si, lo es":"No lo es";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cadenas</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: black;
        }
        .cont{
            min-width: 240px;
            max-width: 400px;
            width: 80%;
            margin: 0 auto;
            min-height: 60px;
        }
        #cadena{
            display: block;
            width: calc(100% - 12px);
            height: 30px;
            padding-left: 10px;
            font-size:  18px; 
        }
        #enviar{
            display: block;
            margin: 10px 0;
            width: 100%;
            height: 30px;
            border-radius: 0px;
            color: white;
            background: rgba(200,0,0,1);
            border: none;
            cursor: pointer;
            font-size:  18px;
        }
        #Title{
            text-align: center;
            min-width: 240px;
            width: 90%;
            margin: 0 auto;
            min-height: 80px;
            font-size: 80px;
            transform-origin: top;
            transform-style: preserve-3d;
            transform: perspective(111px) rotateX(-15deg);
            color: rgba(200,0,0,1);;
        }
        #Title::before{
            content: 'Formulario';
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            color: rgba(200,0,0,0.1);
            transform-origin: bottom;
            transform: perspective(1000px) rotateX(-160deg) translateY(29px);
        }
        #elformulario{
            margin-top: 25px;
        }
        #captions{
            height: auto;
            color: white;
            font-size: 16px;
        }
        .thebody{
            padding: 10px;
        }
    </style>
</head>

<body>
    <h2 id="Title">Formulario</h2>
    <div class="cont  thebody" id="elformulario">
        <form action="./ejercicioForma.php" method="get">
            <input type="text" name="cadena" id="cadena" placeholder="Introduce la cadena" value="<?=$cadena?>">
            <input type="submit" value="enviar" id="enviar">
        </form>
    </div>

    <div class="cont thebody" id="captions">
        <div>Cadena enviada: <?=$cadena?></div>
        <div>Numero de vocales: <?php echo cantVocCons()["voc"]?></div>
        <div>Numero de consonantes: <?php echo cantVocCons()["cons"]?></div>
        <div>¿Es palíndromo?: <?php echo esPalindromo()?></div>
    </div>
    
</body>
</html>
