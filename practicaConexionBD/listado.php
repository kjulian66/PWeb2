<?php

    require "conexion.php";
    $conexion = conexion();
    $sqlListar = "select * from productos;";
    $resulset = mysqli_query($conexion, $sqlListar);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Listar Datos</h1>
    <?php
        if(mysqli_affected_rows($conexion) > 0) {
        ?>
        <table id="tableLista">
            <tr>
                <th>ID Producto</th>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
            <?php
                while ($registro = mysqli_fetch_assoc($resulset)) {
            ?>   
            <tr>
                <td><?php echo $registro["idProducto"] ?></td>
                <td><?php echo $registro["producto"] ?></td>
                <td><?php echo "$" .$registro["precio"] ?></td>
            </tr>
            <?php
                }
            ?>
            
        </table>  
        <?php      
        } else {
        ?>
            <h1>NO HAY DATOS CARGADOS</h1>
        <?php
        }
    ?> 
    <a href="./index.php"><button>VOLVER</button></a>
    <a href="./carga.php"><button>CARGAR DATOS</button></a>
</body>
</html>