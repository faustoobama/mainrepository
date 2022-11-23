<?php

    if($_POST['enviar']){
        echo "Bienvenido ".$_POST['nombre']."<br>";
        
        $userAgent = explode(' ',$_SERVER['HTTP_USER_AGENT']);
        $origin = explode(':',$_SERVER['HTTP_ORIGIN']);

        echo "IP de origen: ".substr($origin[1], 2, (strlen($origin[1])-1))." <br>";
        echo "Navegador: ".$userAgent[count($userAgent) - 1]."<br>";

        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = $_POST['idioma'];
        $idioma = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

        echo "Idioma Actual: ".(($idioma[0] == 'en-US')?"Ingles":"El filipino Papá")." <br>";
    }

?>