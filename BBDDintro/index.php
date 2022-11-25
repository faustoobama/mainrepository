<?php
    $ddbb = 'primerabbdd';
    $host = 'mysql:host=localhost;dbname='.$ddbb;
    $user = 'admin';
    $pass = 'admin';

    try {
        $conexion = new PDO($host,$user,$pass);

    } catch (PDOException $e) {
        throw $e;
    }
    $conexion = null;
?>+