<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <p> 1.- Crear un programa que me permita ingresar 1 numero y me diga si es par o impar.</p>

    <form action="" method="GET">
        <input id="inputArea" type="number" name="num1">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        
        if(isset($_GET["num1"])){
            $numero1 = $_GET["num1"];

            function modulo ($num1) {
                $result = $num1%2;
                return $result;
            }
            
            $modulo = modulo($numero1);

            if ($modulo == 0) {
                echo "El numero es PAR";
            }
            else {
                echo "El numero es IMPAR";
            }

        }
    ?>
</body>
</html>


