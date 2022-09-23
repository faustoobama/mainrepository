<?php

$cadena = "";

if (isset($_GET["cadena"])) $cadena = $_GET["cadena"];

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

    if(strlen($cadena) > 0){
        do{
            $resultado=($cadena[$i]==$cadena[strlen($cadena) - 1 - $i]);
        }
        while($cadena[$i] == $cadena[strlen($cadena) - 1 - $i] && $i < $cadena[strlen($cadena)]);
    
        return ($resultado==1)?"Si, lo es":"No lo es";
    }else {
        return "No se sabe ... cadena vacia";
    }
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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Outfit&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Spectral:ital,wght@1,500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');
        @keyframes neon{
            0%{
                color: rgba(200,0,0,.9);
            }
            40%{
                color: rgba(255,0,0,1);
            }
            60%{
                color: rgba(255,0,0,1);
            }
            100%{
                color: rgba(200,0,0,.9);
            }
            
        }
        *{
            margin: 0;
            padding: 0;
        }
        body{
            background: black;
            padding-top: 10px;
            transition: .3s all;
        }
        .cont{
            min-width: 240px;
            max-width: 400px;
            width: 80%;
            margin: 0 auto;
            min-height: 60px;
        }
        #cadena{
            font-family: Spectral;
            display: block;
            width: calc(100% - 12px);
            height: 30px;
            padding-left: 10px;
            font-size:  18px;
            background: white;
            transform: translateZ(15px);
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
            font-family: 'Outfit';
            letter-spacing: 5px;
            transform: translateZ(15px);
            
            
        }
        form{
            transform-style: preserve-3d;
            transform: perspective(300px) rotateX(-3deg);
        }
        #Title{
            text-align: center;
            min-width: 240px;
            width: 90%;
            margin: 0 auto;
            min-height: 60px;
            font-size: 60px;
            transform-origin: top;
            transform-style: preserve-3d;
            transform: perspective(111px) rotateX(-3deg);
            color: rgba(200,0,0,1);
            font-family: 'Outfit';
            letter-spacing: 7px;
            animation: neon 1.5s infinite;
        }
        #Title::before{
            content: 'FORMULARIO';
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            color: rgba(200,0,0,0.1);
            transform-origin: bottom;
            text-shadow: 0px 0px 100px rgba(255,0,0,0.9);
            transform: perspective(1000px) rotateX(-145deg) translateY(25px);
        }
        #elformulario{
            margin-top: 25px;
        }
        #captions{
            height: auto;
            color: white;
            font-size: 18px;
            font-family: 'Outfit';
            text-shadow: 2px 2px 8px rgba(255,0,0,0.9)
        }
        .thebody{
            padding: 10px;
        }
        
    </style>
</head>

<body>
    <h2 id="Title">FORMULARIO</h2>
    <div class="cont  thebody" id="elformulario">
        <form action="./ejercicioForma.php" method="get">
            <input type="text" name="cadena" id="cadena" placeholder="Introduce la cadena" value="<?=$cadena?>">
            <input type="submit" value="ENVIAR" id="enviar">
        </form>
    </div>

    <div class="cont thebody" id="captions">
        <div>Cadena enviada: <b><?=$cadena?></b></div>
        <div>Numero de vocales: <b><?php echo cantVocCons()["voc"]?></b></div>
        <div>Numero de consonantes: <b><?php echo cantVocCons()["cons"]?></b></div>
        <div>¿Es palíndromo?: <b><?php echo esPalindromo()?></b></div>
    </div>
    
</body>
<script>
    document.addEventListener('mousemove',e=>{
        if(e.clientX <= (window.innerWidth)/5 ){
            document.querySelector('body').style.transform="perspective(400px) rotateY(-18deg)";
        }else{
            if(e.clientX > window.innerWidth - (window.innerWidth/5)){
                document.querySelector('body').style.transform="perspective(400px) rotateY(18deg)";
            }else document.querySelector('body').style.transform="perspective(400px) rotateY(-0deg)";
        }
    });
</script>
</html>
