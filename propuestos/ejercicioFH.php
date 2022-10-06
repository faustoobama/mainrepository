<?php
    // Este es el parrafo que simulara los distintos componentes del sitio Web, a los cuales necesitamos acceder desde el buscador
    $parrafo = <<<EOF
    En la década de 1920 Satyendra Nath Bose y Albert Einstein publican
    conjuntamente un artículo científico acerca de los fotones de luz
    y sus propiedades Bose describe ciertas reglas para determinar si
    dos fotones deberían considerarse idénticos o diferentes Esta se llama
    la teoria del condensado de Bose - Einstein Einstein aplica estas reglas
    a los átomos preguntándose cómo se comportarían los átomos de un gas
    si se les aplicasen estas reglas
    EOF;
    // Para poder efectuar la busqueda en este caso, pasamos el STRING a Array, de forma que podamos recorrerlo

    $parrafoArray = explode(" ",$parrafo); // Definimos como limitador los espacios, de forma que todo aquello separado por un espacio, ser'a un elemento.

    // Definimos una funcion para realizar la busqueda, de forma que tengamos control total de cuando se ejecuta ese trozo de codigo

    function buscar(){

        global $parrafoArray; // Cargamos el array con los elementos a buscar
        
        if (isset($_POST["buscar"]) && strlen($_POST['texto']) > 1){

            $found = $_POST['texto'];

            if(in_array($found, $parrafoArray)){ // Si se encuentra la palabra, devuelve verdadero

                $keys = array_keys($parrafoArray, $found); // Creamos un arreglo con cada una de las claves, por si aparece el elemento varias veces
    
                for($i = 0; $i < count($keys); $i++){ // Por cada elemento, procedemos a mostrar un conjunto de palabras anteriores y posteriores al elemento, dando lugar a la frase que la contiene.
    
                    $counter = -3;
    
                    $key = intval($keys[$i]); 
    
                    while(($key + $counter) < count($parrafoArray) && $counter < 6){ // Se mostraran los elementos siempre y cuando pertenezcan al rango (e >= 0 y e <= palabra final de texto) y sean menos de 10 en la frase.

                        if(($key + $counter) >= 0){
                            echo ($counter == 0)
                            ? "<b><i>".$parrafoArray[$key + $counter]."</i></b> "
                            :$parrafoArray[$key + $counter]." ";
                        }
                        $counter++;
                    }
                    echo " ... ";
                }
            }else echo "No fue encontrado nada con <b> $found <b> ..."; // Si no se encuentra la palabra
        } else echo "Buscando ... <br> (Procure buscar palabras con mas de un caracter)"; // Si no se procedio a buscar nada
    }
    
    function sinDuplicados($delimiter, $theString){
        
        $fraseUnica = array_unique(explode($delimiter,$theString));

        print("<h5>Conjunto de nombres original: </h5>");

        print($theString);

        echo "<br> <h5>Conjunto de nombres Sin duplicados: </h5>";

        array_map(function($e){echo $e.", ";}, $fraseUnica);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador - Henry - Fausto - Sergio</title>
    <style>
        .cont{
            margin: 20px auto;
            width: 600px;
            height: auto;
            text-align: justify;
        }
        #texto{
            width: 85%;
        }
        #buscar{
            width: 12%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form class="cont" method="POST">
        <h3>Buscador de palabras</h3>
        <input type="text" name="texto" id="texto">
        <input type="submit" name="buscar" id="buscar" value="buscar">
    </form>
    <div class="cont">
        <h3>Parrafo de referencia</h3>
        <p>
            En la década de 1920 Satyendra Nath Bose y Albert Einstein publican conjuntamente un artículo 
            científico acerca de los fotones de luz y sus propiedades. <br><br>
            Bose describe ciertas reglas para determinar si dos fotones deberían considerarse idénticos o diferentes. Esta se llama 
            la teoria del condensado de Bose - Einstein.<br><br>
            Einstein aplica estas reglas a los átomos preguntándose cómo se comportarían los átomos de un gas si se les aplicasen estas reglas
        </p>
    </div>

    <div class="cont">
        <h3>Resultado de la Busqueda: </h3>
        <p>
            <?php buscar();?>
        </p>
    </div>

    <div class="cont">
        <h3>Eliminando valores duplicados: </h3>
        <p>
            <?php
            $frase="Mateo, Marcos, Lucas, Pedro, Max, Philip, Lucer, Robert, Maximiliano, Roberto, Pedro, Wenceslao, Teodoro, Mateo, Felipe, Petra, Lucer, Jose, Armando, Simón, Nicéforo, Jose, Felipe";
            sinDuplicados(", ", $frase);
            ?>
        </p>
    </div>
</body>
</html>