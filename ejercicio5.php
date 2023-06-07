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
    <h1>Ejercicio 5</h1>
    <p> 5.- Crear un programa que me permita ingresar 5 numeros y me muestre su promedio.</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="number" name="number3">
        <input type="number" name="number4">
        <input type="number" name="number5">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["number1"])){
            $input1 = $_GET["number1"];
            $input2 = $_GET["number2"];
            $input3 = $_GET["number3"];
            $input4 = $_GET["number4"];
            $input5 = $_GET["number5"];
            
            function promedio ($input1, $input2, $input3, $input4, $input5) {
                $promedio = ($input1 + $input1 + $input1 + $input1 + $input1) / 5;
                return $promedio;
            }
            
            echo "El promedio es: " . promedio($input1, $input2, $input3, $input4, $input5);
        }
  
    ?>
</body>
</html>