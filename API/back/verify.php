<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo json_encode(['status'=>403,'message'=>'Unhautorized']);
    }else echo json_encode(['status'=>200,'data'=>$_SESSION]);

?>