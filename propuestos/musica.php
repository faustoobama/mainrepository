<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamo arriba con la maquinaria!!</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        h3{
            text-align: center;
        }
        input{
            width: 100%;
            height: 30px;
            padding: 0 ;
            border: 1px solid black;
            padding-left: 10px;
        }
        form{
            width: 200px;
            margin: 50px auto;
        }
        #publicar{
            width: 212px;
            height: 35px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="musica.php" class="elformulario" method="post">
        <h3>Never ending Party</h3> <br><br>
        <label for="musica"> Tema de la Musica: </label> <br>
        <input type="text" name="tema" id="tema"> <br>
        <?php
            $cancion = [];
            $playlist = [];

            if($_POST['publ']){

                        if(!empty($_POST['tema'])){

                            $cancion['tema'] = $_POST['tema'];

                        }else echo "<br><h5> El tema no puede estar vacío </h5>";
            }
        ?>
        <br>
        <label for="lahora"> Hora: </label> <br>
        <input type="time" name="lahora" id="lahora"> <br>
        <?php
            if($_POST['publ']){

                        if(!empty($_POST['lahora'])){

                            $cancion['hora'] = $_POST['lahora'];

                        }else {
                            echo "<br><h5> La hora no puede estar vacía </h5>";
                        }
            }

        ?>
        <br>
        <input type="submit" value="publicar" id="publicar" name="publ">
    </form>
    <div>

    </div>
    <?php
        if(!empty($cancion['tema']) && !empty($cancion['hora'])){
            $fichero = 'playlist.txt';
            // Abre el fichero para obtener el contenido existente
            $contenido = file_get_contents($fichero);
            // Añade una nueva persona al fichero
            $contenido .= "Tema: ".$cancion['tema']."\n"."Hora: ".$cancion['hora']."\n";
            // Escribe el contenido al fichero
            file_put_contents($fichero, $contenido);
        }
    ?>
</body>
</html>

