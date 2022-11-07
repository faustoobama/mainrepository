<?php
// Fichero inicial

/*
Nombre  // text 25 chars
Apellido // text 50 chars 
birthdate // date formato dd/mm/yyyy
sexo // radio 
email // email
telefono // tel
grado // select
idiomas y nivel // select
dni / nie // text
domicilio // text
preferencias // checkbox
acerca de ti // textarea
curriculem // tipe file
fecha de inicio de las prácticas -> date
/// Posibles Metodos

Calculo de potenciales empresas en funcion de la ubicacion del usuario
Calculo de edad para fines posteriores
*/

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
                <input type="text" name="dni" id="dni"> <br>
            </div>

            <div class="inputCont">
                <label for="email">Correo:</label> <br>
                <input type="email" name="email" id="email"> <br>
                <label for="telefono">Telefono:</label> <br>
                <input type="tel" name="telefono" id="telefono"> <br>
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
                <label for="grado">Grado: </label> <br>
                <select name="grado" id="grado" class="inputSel">
                    <option value="void">Seleccione el grado</option>
                    <option value="asir">ASIR</option>
                    <option value="daw">DAW</option>
                    <option value="dam">DAM</option>
                </select> <br>

                <label for="inicio">Inicio de Practicas: </label> <br>
                <input type="date" name="inicio" id="inicio"> <br>
            </div>

            <div class="inputCont">
            <label for="grado">Comunidad Autonoma: </label> <br>
                <select name="comunidad" id="comunidad" class="inputSel">
                    <option value="void">Seleccione su comunidad</option>
                    <option value="asir">Madrid</option>
                    <option value="daw">Barcelona</option>
                    <option value="dam">Andalucia</option>
                </select>
                
                <label for="poblacion">Poblacion: </label> <br>
                <select name="poblacion" id="poblacion" class="inputSel">
                    <option value="void">Seleccione su localidad</option>
                    <option value="asir">Ciempozuelos</option>
                    <option value="daw">Aranjuez</option>
                    <option value="dam">Villa Verde</option>
                </select>

                <label for="postalcode">Cod. postal:</label> <br>
                <input type="text" name="postalcode" id="postalcode"> <br>

                <label for="domicilio">Domicilio</label> <br>
                <input type="text" name="domicilio" id="domicilio"> <br>
            </div>

            <div class="inputCont checkboxs">
                <label for="idiomas">Idiomas</label> <br>
                <input type="checkbox" name="en" id="en"> <label for="en">Ingles</label> <br>
                <input type="checkbox" name="fr" id="fr"> <label for="fr">Frances</label> <br>
                <input type="checkbox" name="es" id="es"> <label for="es">Español</label> <br>
                <input type="checkbox" name="pt" id="pt"> <label for="pt">Portugués</label> <br>
            </div>

            <div class="inputCont checkboxs">
                <label for="preferencias">Preferencias: </label> <br>
                <input type="checkbox" name="bbdd" id="bbdd"> <label for="bbdd">Bases de datos</label> <br>
                <input type="checkbox" name="redes" id="redes"> <label for="redes">Redes</label> <br>
                <input type="checkbox" name="sre" id="sre"> <label for="sre">Sistemas</label> <br>
                <input type="checkbox" name="devs" id="devs"> <label for="devs">Desarrollo</label> <br>
            </div>

            <div class="inputCont" style="grid-column:1/3; grid-row:4/5;">
                <label for="">Presentacion: </label> <br>
                <textarea name="presentacion" id="presentacion" cols="30" rows="10" placeholder="Acerca de ti ..."></textarea> <br>
            </div>

            <div class="inputCont" style="grid-column:1/3; grid-row:5/6;display; flex; flex-direction: column; justify-content: space-between">
                <input type="file" name="curriculum" id="curriculum"> <label for="curriculum" id="curr">Adjuntar fichero</label>
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

