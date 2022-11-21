<?php

try {

    $conection = new PDO('mysql:host=localhost;dbname=mibasededatos','henry','01');

    $result = $conection ->query('SELECT * FROM cliclistas');

    foreach($result as $key => $filas){
        // print("El campo $campo contiene el valor $valor");
        foreach($filas as $key => $valor){
            
            print("El campo $key contiene el valor $valor <br>");
    
        };

    };
} catch (PDOExepcion $e) {
    print('Error: ').$e->getMessage();
}

?>