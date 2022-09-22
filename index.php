<?php
echo "EJERCICIOS <br><br>";

function printPir(){
    if($_GET['numero'] != 0 || $_GET['numero'] != ""){
        $rows=$_GET['numero'];
    }else{
        $rows=0;
        echo "<script>alert('Debes ingresar un valor valido')</script>";
    }
    for($row=1;$row<=$rows;$row++){
        echo "<div class='maincont'>";
        for($x=$row;$x<=$rows+1;$x++){
            echo "<div class='void'></div>";
        }
        for($i=1;$i<=$row+($row-1);$i++){
            echo "<div class='filled'></div>";
        }
        echo" </div>";
    }
}
printPir();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>

    <style>

        .maincont{
            display: flex;
            width: auto;
        }

        .filled{
            border: 1px solid black;
            width: 10px;
            height: 10px;
        }
        .void{
            width: 10px;
            height: 10px;
            border: 1px solid transparent;
        }
    </style>

</head>

<body>
    <div>
        <form action="./index.php" method="get">
            <input type="text" name="numero" id="numero">
            <input type="submit" value="enviar">
        </form>
    </div>
    
</body>
</html>
