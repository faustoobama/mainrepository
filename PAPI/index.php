<?
    $url = '';
    if (isset($_GET['url'])){
        $url = $_GET['url'];
    }else $url = '/front/inicio.php';

    if (isset($_GET['url']))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            border: none;
            outline: none;
        }
        p{
            color: rgb(43, 171, 166);
            font-size: 36px;
            margin-bottom: 11px;
            text-align: center;
        }
        #cont{
            position: relative;
            padding: 50px 0;
            width: 100%;
            min-height: 500px;
            height: fit-content;
            display: flex;
            justify-content: center;
        }
        .form{
            display: none;
            position: absolute;
            min-width: 240px;
            max-width: 333px;
            width: 80%;
            min-height: 344px;
        }
        .show{
            display: block !important;
        }
        .form > input {
            display: block;
            width: 100%;
        }
     
        .inputData{
            margin-top: 50px;
            border-bottom: 4px solid rgb(148, 150, 150);
            height: 44px;
            font-size: 20px;
            text-align: center;
        }
        .submitButton{
            border-radius: 4px;
            margin-top: 50px;
            height: 44px;
            color: rgb(255, 255, 255);
            background-color: rgb(43, 171, 166);
            cursor: pointer;
            transition: .1s;
            font-size: 22px;
        }
        .submitButton:hover{
            color: rgb(43, 171, 166);
            border: 1px solid rgb(43, 171, 166);
            background-color: rgb(255, 255, 255);
        }
        .submitButton:active {
            color: rgb(255, 255, 255);
            border: none;
            box-shadow: 0px 1px 3px black inset;
            background-color: rgb(175, 76, 36);
            cursor: pointer;
        }
        .warning{
            position: relative;
            width: calc(100% - 20px);
            min-height: 33px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px; 
            background-color: rgb(218, 51, 51);
            color: white;
            margin-top: 20px;
            font-size: 20px;
        }
        .closeWarning{
            right: 10px;
            top: 5px;   
            position: absolute;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .gotoRegistration{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 60px;
        }
        .goTo{
            position: relative;
            color: rgb(114, 114, 114);
            cursor: pointer;
            transition: .5s;
        }
        .goTo:hover{
            color: rgb(43, 171, 166);
            cursor: pointer;
        }
        .goTo::before{
            position: absolute;
            width: 0%;
            height: 100%;
            content: ' ';
            border-bottom: 1px solid rgb(43, 171, 166);
            transition: .5s;
        }
        .goTo:hover::before{
            width: 100%;
        }
    </style>
</head>
<body>

    <div id="cont">
        <form id="logIn" class="form show" action='./back/login.php' method='post'>
            <p>Inicio de Sesion</p>

            <input type="text" name="user" id="user" placeholder="username" class="inputData">

            <input type="password" name="pass" id="pass" placeholder="Password" class="inputData">

            <input type="submit" value="Iniciar sesion" id="loginButton" class="submitButton">

            <div class="gotoRegistration"><h4 id="gotoRegistration" class="goTo">¿No tienes una cuenta? Registrarte</h4></div>
        </form>
    </div>

</body>
</html>