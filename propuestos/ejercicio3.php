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
    $total = [];

    function imprimirTienda(){
        global $productos;
        echo "<tr><td class='producto'>Productos</td><td>Precio</td><td class='cantidad'>Cantidad</td></tr>";
        array_walk($productos, function($v,$k){
            echo "<tr><td class='producto'>$k</td><td>$v</td><td class='cant'><input class='cant2' type='number' name='cant$k'></td></tr>";
        });
        
    }

    function imprimirFactura(){
        global $productos;
        global $total;
        if(isset($_GET['comprar'])){
            echo "<tr><td class='producto'>Productos</td><td>Cantidad</td><td>Precio Final</td></tr>";
            
            array_walk($productos, function($v,$k){
                global $total;
                if(isset($_GET["cant$k"]) && intval($_GET["cant$k"]) != 0){
                    echo "<tr><td class='producto'> $k </td><td>".$_GET["cant$k"]."</td class='producto'> <td>".intval($_GET["cant$k"])*intval($v)."</td></tr>";
                    array_push($total,intval($_GET["cant$k"])*intval($v));
                }
            });
            echo "<tr><td colspan='2'> PRECIO TOTAL </td><td>".array_sum($total)."</td></tr>";
        }
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
        *{
            margin: 0;
            padding: 0;
        }
        .cont{
            width: 400px;
            height: auto;
            margin: 20px auto;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td{
            padding: 2px;
            border: 1px solid black;
        }
        .producto{
            width: 40%;
        }
        .cant{
            width: 30%;
        }
        .cant2{
            width: calc(100% - 4px);
        }
        #comprar{
            margin: 10px 0;
            width: 100%;
            height: 30px;
        }
    </style>
</head>
<body>
    <div class="cont">
    <form action="" method="GET">
        <table><?php imprimirTienda(); ?></table>
        <input type='submit' name='comprar' id='comprar' value='Ver Factura'>
    </form>
    </div>

    <div class="cont">
    <table>
            <?php imprimirFactura(); ?>

    </table>
    </div>
    
</body>
</html>