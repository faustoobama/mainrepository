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

        * {margin: 0;padding: 0;}
        .mainContainer{
            width: 400px;
            height: 700px;
            display: grid;
            grid-template-columns: repeat(2, 50%);
            grid-template-rows: repeat(4, 25%);
            margin: 0 auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                height: 500px;
        }
        .mainContainer > div{
            width: 100%;
            height: auto;
        }
        input[type='text'],input[type='date'],input[type='email'],input[type='tel']{
            width: 90%;
        }
        select{
            width: 92%;
        }
        textarea{
            resize: none;
            width: 195%;
            height: 80%;
        }
        input[type='submit']{
            width: 95%;
        }

    </style>
</head>

<body>

    <form class="mainContainer">
        <div>
            <label for="nombre">Nombre: </label><br>
            <input type="text" name="nombre" id="nombre"> <br>
            <label for="nombre">Apellido: </label><br>
            <input type="text" name="apellido" id="apellido"> <br>
            <label for="dni">DNI / NIE</label> <br>
            <input type="text" name="dni" id="dni"> <br>
        </div>

        <div>
            <label for="email">Correo:</label> <br>
            <input type="email" name="email" id="email"> <br>
            <label for="telefono">Telefono:</label> <br>
            <input type="tel" name="telefono" id="telefono"> <br>
            <label for="dni">Domicilio</label> <br>
            <input type="text" name="domicilio" id="domicilio"> <br>
        </div>

        <div>
            <input type="radio" name="sexo" id="sexo" value="h"> <label for="sexo">Hombre</label> <br>
            <input type="radio" name="sexo" id="sexo" value="m"> <label for="sexo">Mujer</label> <br>
            <input type="radio" name="sexo" id="sexo" value="x"> <label for="sexo">Otro</label> <br>
        </div>

        <div>
            <label for="fechaNac">Fecha de nacimiento: </label> <br>
            <input type="date" name="fnac" id="fnac"> <br>
            <label for="grado">Grado: </label> <br>
            <select name="grado" id="grado">
                <option value="void">Seleccione el grado</option>
                <option value="asir">ASIR</option>
                <option value="daw">DAW</option>
                <option value="dam">DAM</option>
            </select> <br>
            <label for="inicio">Inicio de Practicas: </label> <br>
            <input type="date" name="inicio" id="inicio"> <br>
        </div>

        <div>
            <label for="idiomas">Idiomas</label> <br>
            <input type="checkbox" name="ingles" id="ingles"> <label for="">Ingles</label> <br>
            <input type="checkbox" name="ingles" id="frances"> <label for="">Frances</label> <br>
            <input type="checkbox" name="ingles" id="español"> <label for="">Español</label> <br>
            <input type="checkbox" name="ingles" id="portugués"> <label for="">Portugués</label> <br>
        </div>

        <div>
            <label for="preferencias">Preferencias: </label> <br>
            <input type="checkbox" name="bbdd" id="bbdd"> <label for="">Bases de datos</label> <br>
            <input type="checkbox" name="redes" id="redes"> <label for="">Redes</label> <br>
            <input type="checkbox" name="sre" id="sre"> <label for="">Sistemas</label> <br>
            <input type="checkbox" name="devs" id="devs"> <label for="">Desarrollo</label> <br>
        </div>

        <div style="grid-colum:1/3; grid-row:4/5;">
            <label for="">Presentacion: </label> <br>
            <textarea name="presentacion" id="presentacion" cols="30" rows="10" placeholder="Acerca de ti ..."></textarea> <br>
        </div>

        <div style="grid-colum:1/3; grid-row:5/6;">
            <input type="file" name="curriculum" id="curriculum">
        </div>
            
        <div style="grid-colum:1/3; grid-row:6/7;">
            <input type="submit" value="enviar" name="enviar" id="enviar">
        </div>
    </form>

</body>

</html>

