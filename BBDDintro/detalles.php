<?php

    $id=$_GET['id'];
    try{
    $conexion=new PDO('mysql:host=localhost;dbname=primerabbdd','admin','admin');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{

    $preparada=$conexion->prepare('SELECT * FROM ciclistas WHERE id=:id');
    $preparada->bindParam(':id',$id);
    $preparada->execute();

    $Detciclista=$preparada->fetchAll(PDO::FETCH_ASSOC);

    foreach($Detciclista as $Dato){
        echo $Dato['nombre'];
    }

    }catch(PDOException $b){
        echo $b->getMessage();
    }

    }catch(PDOExcepcion $e){
        echo $e->getMessage();
    }

?>