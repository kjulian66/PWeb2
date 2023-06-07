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
    <h1>Ejercicio 6</h1>
    <p> 6.- Escribir el programa que me permita ingresar 2 numeros y elegir la operación a realizar (suma, resta,
multiplicacion, division) y me muestre el resultado de la misma.</p>

    <form action="" method="GET">
        SUMA: <input type="radio" name="input1">
        RESTA: <input type="radio" name="input2">
        MULTIPLICACION: <input type="radio" name="input3">
        DIVISION: <input type="radio" name="input4">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $number1 = $_GET["number1"];
            $number2 = $_GET["number2"];

            if(isset($_GET["input1"])){
                $input = 1;
            }
            
            if(isset($_GET["input2"])){
                $input = 2;
            }

            if(isset($_GET["input3"])){
                $input = 3;
            }

            if(isset($_GET["input4"])){
                $input = 4;
            }
            
            function suma ($num1, $num2) {
                $resultado = $num1 + $num2;
                return $resultado;
            }
            
            function resta ($num1, $num2) {
                $resultado = $num1 - $num2;
                return $resultado;
            }

            function multiplicacion ($num1, $num2) {
                $resultado = $num1 * $num2;
                return $resultado;
            }

            function division ($num1, $num2) {
                $resultado = $num1 / $num2;
                return $resultado;
            }

            switch ($input) {
                case 1:
                    echo "SUMA: ";
                    echo suma($number1, $number2);
                    break;
                case 2:
                    echo "RESTA: ";
                    echo resta($number1, $number2);
                    break;
                case 3:
                    echo "MULTIPLICACION: ";
                    echo multiplicacion($number1, $number2);
                    break;
                case 4:
                    echo "DIVISION: ";
                    echo division($number1, $number2);
                    break;
            }
            
        }
  
    ?>
</body>
</html>