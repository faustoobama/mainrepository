<?php
/*
04. Usuarios deportivos
Para todos los ejercicios se debe describir la estructura de clases y definir sus métodos. 
Para no implementar la funcionalidad que representan en este punto escribiremos la acción que estamos realizando. 
Por ejemplo:

Si estamos implementando el método pagar() en la clase PayPal al llamar a este método de un objeto PayPal se escribirá 
"Pago con PayPal"
Si estamos implementando el método disparar en la clase Rifle se escribirá "Disparo con rifle"
Junto con la definición de clases tendrá que haber una o varias páginas de test donde se compruebe 
que la funcionalidad se corresponde con los requisitos.

Estamos desarrollando una aplicación para organizar partidos de varios deportes.

NOTA GENERAL: No es necesario crear la clase Partido
NOTA GENERAL: No es necesario crear la clase Deporte
En nuestra aplicación tenemos usuarios que se deben representar por objetos de la clase Usuario. 
De estos usuarios se debe almacenar la información de: nombre, apellidos y deporte que practican. 
De estos usuarios se desea gestionar un nivel de juego, estos niveles irán desde el nivel 0 al nivel 6.

También se desea almacenar el histórico de partidos, todos sus resultados.

Todos los usuarios comenzarán en el nivel 0. Los niveles no se pueden modificar de forma directa. 
Cada vez que un jugador gane 6 partidos seguidos subirá de nivel, cuando el usuario pierda 6 partidos seguidos bajará.

NOTA: Es 6 es una constante, no debe haber número mágicos en el código.
Dentro de las operaciones que podremos realizar con estos usuarios tenemos:

introducirResultado: Aceptará como valores victoria, derrota o empate.
NOTA: Deberá de tener en cuenta que puede subir/bajar de nivel.
NOTA2: Cuando esto ocurra se deberá escribir que el usuario ha subido/bajado de nivel.
NOTA3: Quizá tengas que usar alguna constante.
imprimirInformación: Escribirá un elemento párrafo con la información del usuario. 
Para diferenciar este párrafo del resto de elementos escritos, el párrafo tendrá un color azul claro.
NOTA: Tendrás que usar css
Dentro del párrafo aparecerá un ul con li y la información de sus resultas previos.
Para ganar dinero tenemos otro tipo de usuario: UsuarioPremium. 
Para estos usuarios solo hará falta ganar 3 partidos seguidos para subir nivel. 
Cuando se escriba información sobre este tipo de usuarios deberá aparecer junto al nombre entre paréntesis la 
palabra Premium (Premium)

También necesitamos tener otro tipo de usuario administrador, este usuario tendrá la posibilidad de crear partidos 
y además la forma que tiene de subir nivel es similar a los usuarios premium. Cuando se escriba el nombre de 
estos usuarios deberá aparece (Admin)

Estos usuarios tendrán la función crearPartido
Junto a la codificación de las clases crea 3 páginas que cree usuarios con distintos roles y vaya 
introduciendo resultados para verificar que la aplicación se comporta de la forma esperada.

Ejemplo de salida:

Usuario Jorge Creado.
Usuario Pepe Creado.
Usuario Jorge Gana Partido.
Usuario Pepe Pierde Partido.
...
Usuario Jorge Gana Partido.
Usuario Jorge sube a nivel X.
...
Imprimir Jorge
-> HTML con el párrafo azul claro y la información.
*/

require('Usuario.php');

$usuario1 = new Usuario("El","Enano","Tres en ralla");
$usuario2 = new Usuario("Petra","Galeche","Tres en ralla");

$v = ["Petra","El","Petra","El","El","Petra","Petra","Petra","Petra","Petra","Petra","El"];

echo $usuario1->printUser();
echo "<br>";
echo $usuario2->printUser();
echo "<br>";

foreach($v as $x){
    
    switch($x){
        case "Petra":
            $usuario2->setVictorias();
            $usuario1->setDerrotas();
        break;
        case "El":
            $usuario1->setVictorias();
            $usuario2->setDerrotas();
        break; 
    }
}
echo "<br> Resultados Finales: <br>";
echo $usuario1->printUser();
echo "<br>";
echo $usuario2->printUser();
echo "<br>";



?>