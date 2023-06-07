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
    <h1>Ejercicio con funciones 5</h1>
    <p> 5.- Crear un programa que pueda calcular suma, resta, multiplicación y división entre 2 números. El programa debe
        tener un formulario para poder ingresar los números y la operación. Crear una función calculadora que reciba
        como parámetro los 3 valores y devuelva el resultado.
        Ejemplo: calculadora(2,+,2)</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <select name="operation" id="">
            <option value="+">SUMA</option>
            <option value="-">RESTA</option>
            <option value="*">MULTIPLICACION</option>
            <option value="/">DIVISION</option>
        </select>
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php
    if (isset($_GET["ENVIAR"])) {

        $num1 = $_GET["number1"];
        $num2 = $_GET["number2"];
        $operation = $_GET["operation"];

        function calculadora($num1, $operation, $num2)
        {
            switch ($operation) {
                case "+":
                    echo "SUMA: ";
                    echo $num1 + $num2;
                    break;
                case "-":
                    echo "RESTA: ";
                    echo $num1 - $num2;
                    break;
                case "*":
                    echo "Multiplicacion: ";
                    echo $num1 * $num2;
                    break;
                case "/":
                    if ($num2 != 0) {
                        echo "DIVISION: ";
                        echo $num1 / $num2;
                    } else {
                        echo "Error: no se puede dividir por 0";
                    }
                default:
                    return "Error";
            }
        }

        calculadora($num1, $operation, $num1);
    }

    ?>
</body>

</html>