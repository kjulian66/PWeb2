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
    <h1>Cargar Datos</h1>
    <form method="POST">
        <table>
        <tr>
            <td><input type="text" name="producto" required placeholder="Producto" maxlength="10"></td>
        </tr>
        <tr>
           <td><input type="number" name="precio" required placeholder="Precio" maxlength="10"></td>
        </tr>
        <tr>
            <td><button type="submit" name="enviar">ENVIAR</button></td>
        </tr>
        </table>
        
    </form>
    <a href="./index.php"><button>VOLVER</button></a>
    <a href="./listado.php"><button>LISTAR DATOS</button></a>

    <?php

    if(isset($_POST["enviar"])) {
        $producto = $_POST["producto"];
        $precio = $_POST["precio"];

        $sql = "insert into productos (
            producto, 
            precio) 
            values (
            '$producto',
            '$precio'
            );";

        require "conexion.php";
        $conexion = conexion();
        
        mysqli_query($conexion, $sql);

        if(mysqli_affected_rows($conexion)>0){
            echo "Se cargo producto";
        } else {
            echo "No se cargo producto";
        }
    }

    ?>
</body>
</html>