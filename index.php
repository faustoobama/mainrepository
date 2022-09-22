<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .maincont{
            --var-ancho: 25px;
            display: flex;
            width: auto;
        }

        .filled{
            background: brown;
            width: var(--var-ancho);
            height: var(--var-ancho);
        }
        .void{
            width: var(--var-ancho);
            height: var(--var-ancho);
        }
        #elformulario{
            width:500px;
            min-height: 50px;
            margin: 0 auto;
            text-align: center;
        }
        form,input{
            display: block;
            margin: 9px auto;
        }
        input[value="enviar"]{
            width: 80px;
            height: 25px;
            border-radius: 0px;
        }
        #piramide{
            margin: 0 auto;
            width: fit-content;
            min-height: 200px;
        }
    </style>
</head>

<body>
    <h2>Piramide</h2>
    <div id="elformulario">
        <form action="./index.php" method="get">
            <input type="number" name="numero" id="numero">
            <input type="submit" value="enviar">
        </form>
    </div>
    <?php

function printPir(){
    if($_GET['numero'] > 1){
        $rows=$_GET['numero'];
    }else{
        $rows=0;
        echo "<script>alert('Debes ingresar un valor valido, entre 2 y n')</script>";
    }
    
    echo "<div id='piramide'>";
    for($row=1;$row<=$rows;$row++){
        echo "<div class='maincont'>";
        for($x=$row;$x<$rows;$x++){
            echo "<div class='void'></div>";
        }
        for($i=1;$i<=$row+($row-1);$i++){
            echo "<div class='filled'></div>";
        }
        echo" </div>";
    }
    echo "</div>";
}
printPir();
?>
</body>
</html>
