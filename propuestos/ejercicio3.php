<?php
    $productos = [
        "naranja" => 1.2,
        "manzana" => 1.5,
        "pera" => 1.8,
        "platano" => 0.8,
        "kiwi" => 0.75,
        "macarrones" => 0.5,
        "arroz" => 0.75,
        "salchichas" => 1,
        "patatas_fritas" => 3,
        "paninis" => 1.5,
        "leche_6_uds" => 5,
        "pizza_jamon_serrano" => 2.59,
        "helado_chocolate" => 2.99
    ];

    function imprimirTienda(){
        global $productos;

        array_walk($productos, function($v,$k){
            echo "<tr><td class='producto'>$k</td><td class='price'>$v</td><td class='cantidad'><input class='price' type='number' name='cant$k'></td></tr>";
        });
        
        echo "<input type='submit' name='enviar'>";
    }

    function imprimirFactura(){
        global $productos;

        array_walk($productos, function($v,$k){
            echo "<tr><td class='producto'> $k </td><td class='price'>".$_GET["cant$k"]."</td class='producto'> <td class='price''>".$_GET["cant$k"]*$v."</td></tr>";
        });

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haciendo la compra</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
        .producto{
            width: 150px;
        }
        .price{
            width: 60px;
        }
    </style>
</head>
<body>
    <table>
        <form action="" method="GET">
            <?php imprimirTienda(); ?>
        </form>
    </table>

    <table>
            <?php imprimirFactura(); ?>

    </table>
    
</body>
</html>