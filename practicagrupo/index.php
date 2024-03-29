<?php

require('./lib/Usuario.php');

    $pepe = new Usuario($_POST);

    if($pepe->esValido()){
        $pepe->crear();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../firma.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cadenas</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javaScript" src="extra.js"></script>
</head>

<body>

    <div class="mainContainer" id="mainContainer">
        <h1>FORMULARIO</h1>
        <form class="Container" id="form" action="" method="post">
            <div class="inputCont">
                <label for="nombre">Nombre: </label><br>
                <input type="text" name="nombre" id="nombre"> <br>
                <label for="apellido">Apellido: </label><br>
                <input type="text" name="apellido" id="apellido"> <br>
                <label for="dni">DNI / NIE</label> <br>
                <input type="text" name="dni" id="dni" pattern="[0-9|Yy|Xx]{1}[0-9]{7}[A-Za-z]{1}"> <br>
            </div>

            <div class="inputCont">
                <label for="email">Correo:</label> <br>
                <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"> <br>
                <label for="telefono">Telefono:</label> <br>
                <input type="number" name="telefono" id="telefono"> <br>
                <label for="fechaNac">Fecha de nacimiento: </label> <br>
                <input type="date" name="fechaNac" id="fechaNac"> <br>
            </div>

            <div class="inputCont ofRadios">
                <label>Sexo:</label>
                <div class="radios">
                    <input type="radio" name="genero" id="generom" value="m"> <label for="generom">Hombre</label> <br>
                    <input type="radio" name="genero" id="generof" value="f"> <label for="generof">Mujer</label> <br>
                    <input type="radio" name="genero" id="generox" value="x"> <label for="generox">Otro</label>
                </div>
                <label for="grado">Grado: </label>
                <select name="grado" id="grado" class="inputSel">
                    <option value="void">Seleccione el grado</option>
                    <option value="asir">ASIR</option>
                    <option value="daw">DAW</option>
                    <option value="dam">DAM</option>
                </select>

                <label for="inicio">Inicio de Practicas: </label>
                <input type="date" name="inicio" id="inicio">
            </div>

            <div class="inputCont">
            <label for="grado">Comunidad Autonoma: </label> <br>
                <select name="comunidad" id="comunidad" class="inputSel">
                    <option value="void">Seleccione su comunidad</option>
                    <option value="madrid">Madrid</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="andalucia">Andalucia</option>
                </select>
                
                <label for="provincia">Provincia: </label> <br>
                <select name="provincia" id="provincia" class="inputSel">
                    <option value="void">Seleccione su localidad</option>
                    <option value="ciempozuelos">Ciempozuelos</option>
                    <option value="sranjuez">Aranjuez</option>
                    <option value="villaverde">Villa Verde</option>
                </select>

                <label for="postalcode">Cod. postal:</label> <br>
                <input type="number" name="postalcode" id="postalcode"> <br>

                <label for="domicilio">Domicilio</label> <br>
                <input type="text" name="domicilio" id="domicilio"> <br>
            </div>

            <div class="inputCont" style="grid-column:1/3; grid-row:4/5;">
                <label for="">Presentacion: </label> <br>
                <textarea name="presentacion" id="presentacion" cols="30" rows="10" placeholder="Acerca de ti ..."></textarea> <br>
            </div>

            <div class="inputCont" style="grid-column:1/3; grid-row:5/6;display; flex; flex-direction: column; justify-content: space-between">
                <input type="submit" name="enviar" id="enviar" class="enviar">
                <input type="button" value="enviar" id="enviarFalse" class="enviar">
            </div>
                
        </form>

        <div id="confirmBanner">
            <div id="formInfo" style="grid-column: 1/3;grid-row: 1/2;"></div>

            <label for="enviar" class="bannerButton" id="confirmButton" style="grid-column: 1/2;grid-row: 2/3;">Confirmar</label>

            <div class="bannerButton" id="cancelButton" style="grid-column: 2/3;grid-row: 2/3;">Cancelar</div>
        </div>
    </div>
</body>

</html>

