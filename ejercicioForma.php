<?php

function vocalesycons(){
    $cadena = $_GET["cadena"];
    $numVocales=0;
    $numCons=0;

    for($i=0;$i<strlen($cadena);$i++){
        ($cadena[$i]=='a' || $cadena[$i]=='e' || $cadena[$i]=='i' || $cadena[$i]=='o' || $cadena[$i]=='u')
        ?$numVocales++
        :$numCons++;
    }

    return ["voc"=>$numVocales,"cons"=>$numCons];
}
function esPalindromo(){
    $cadena = $_GET["cadena"];
    
    for($i=0;$i<round(strlen($cadena)/2,0,PHP_ROUND_HALF_DOWN);$i++){
        
    }

    return ["voc"=>$numVocales,"cons"=>$numCons];
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
        .maincont{
            --var-ancho: 25px;
            display: flex;
            width: auto;
        }

        .filled{
            background: brown;
            width: var(--var-ancho);
            height: var(--var-ancho);
        }
        .void{
            width: var(--var-ancho);
            height: var(--var-ancho);
        }
        #elformulario{
            width:500px;
            min-height: 50px;
            margin: 0 auto;
            text-align: center;
        }
        form,input{
            display: block;
            margin: 9px auto;
        }
        input[value="enviar"]{
            width: 80px;
            height: 25px;
            border-radius: 0px;
        }
        #piramide{
            margin: 0 auto;
            width: fit-content;
            min-height: 200px;
        }
    </style>
</head>

<body>
    <h2>Formulario de Cadenas</h2>
    <div id="elformulario">
        <form action="./ejercicioForma.php" method="get">
            <input type="text" name="cadena" id="cadena" placeholder="Introduce la cadena" value="<?=$cadena?>">
            <input type="submit" value="enviar">
        </form>
    </div>

    <div>
        <div>Cadena enviada: <?=$cadena?></div>
        <div>Numero de vocales: <?php echo vocalesycons()["voc"]?></div>
        <div>Numero de consonantes: <?php echo vocalesycons()["cons"]?></div>
        <div>¿Es palíndromo?: <?php echo esPalindromo()?></div>
    </div>
    
</body>
</html>
