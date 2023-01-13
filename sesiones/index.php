<?php

    const USER = 'admin';
    const PASS = USER;

    $user = $pass = '';

    if(isset($_POST['user'])){
        $user = $_POST['user'];
    }

    if(isset($_POST['pass'])){
        $pass = $_POST['pass'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <h1>Formulario de inicio de sesion</h1>
    <?php
        if($user == USER && $pass == PASS){
            echo '<h1>OK</h1>';
        }else{
            echo <<<EOF
                    <form action="" method="post">
                        <label for="user">usuario</label><br><br>
                        <input type="text" name="user" id="user"> <br><br>
                        <label for="pass">contraseña</label><br><br>
                        <input type="password" name="pass" id="pass"> <br><br>
                        <input type="submit" value="Iniciar sesion">
                    </form>
                    EOF;
        }
    ?>
</body>
</html>