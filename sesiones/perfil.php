<?php

    session_start();

    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Perfil</title>
        </head>
        <body>
            <h1> Estas en el perfil de <?=$username?> </h1>

            <br><br>

            <p> Bienvenido! <b> <?=$username?> </b></p>
        </body>
        </html>
        <?php
    } else header('Location: index.php');

?>