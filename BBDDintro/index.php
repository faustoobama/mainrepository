<?php
    $ddbb = 'primerabbdd';
    $host = 'mysql:host=localhost;dbname='.$ddbb;
    $user = 'admin';
    $pass = 'admin';

    try {
        $cnx = new PDO($host,$user,$pass);

        $cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        try {
            $nombre = 'lucercito Wenright';
            $numtrofeos = 0;
            $descripcion = 'Este es Lucercito y no creo que sea ciclista';
    
            $prepQ = $cnx->prepare("INSERT INTO ciclistas (nombre,numtrofeos,descripcion) VALUES (:nombre,:numtrof,:desc)");

            $prepQ->bindParam(':nombre',$nombre);

            $prepQ->bindParam(':numtrof',$numtrofeos);

            $prepQ->bindParam(':desc',$descripcion);

            $prepQ->execute();

            // $ciclistas = $prepQ->fetchAll(PDO::FETCH_ASSOC);

            // foreach ($ciclistas as $ciclista) {
            //     echo $ciclista['nombre']." ".$ciclista['numtrofeos']." ".$ciclista['descripcion']."<br>";
            // }

            header("Location: detalles.php?id=".$cnx->lastInsertId());
    
        } catch (PDOException $e) {
            echo "Error: ".$e->getMassege();
        }

    } catch (PDOException $e) {
        echo "Error: ".$e->getMassege();
    }

    $conexion = null;
    $consulta=null;

?>