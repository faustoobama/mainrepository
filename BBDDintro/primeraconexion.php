<?php
try{

    $mysql=new PDO('mysql:host=localhost;dbname=primerabbdd','admin','admin');

    $var=$mysql->query('SELECT * FROM ciclistas');

        //print_r($var);

        foreach ($var as $lineas){ 
        foreach($lineas as $key=> $value){
            echo $key . " " . $value . "<br>";

        }

    }
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>