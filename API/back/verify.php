<?php
    session_start();
    if(isset($_SESSION['url'])) {
        echo json_encode($_SESSION['url']);
    }else echo json_encode('./front/inicio.php?dir=directly');
?>