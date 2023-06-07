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
        SUELDO: <input type="number" name="number1"><br>
        ANTIGUEDAD: <input type="number" name="number2"><br>
        CANTIDAD HIJOS: <input type="number" name="number3"><br>
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            
            $sueldo = $_GET["number1"];
            $antiguedad = $_GET["number2"];
            $cantidadHijos = $_GET["number3"];

            function calcularSueldo ($sueldo, $antiguedad, $cantidadHijos) {
                $totalCobrar = 0;
                $valorAntiguedad = 0;
                if($antiguedad >= 5 && $antiguedad < 10) {
                    $valorAntiguedad = ($sueldo * 10) /100;
                    $totalCobrar = ((($sueldo * 10) /100) + $sueldo) + ($cantidadHijos * 1000);
                }
                if ($antiguedad >= 10) {
                    $valorAntiguedad = ($sueldo * 20) /100;
                    $totalCobrar = ((($sueldo * 20) /100) + $sueldo) + ($cantidadHijos * 1000);
                }
                echo "RECIBO DE SUELDO: <br>";
                echo "Sueldo bruto: $".$sueldo. "<br>";
                echo "Antiguedad: ".$antiguedad. " años: $".$valorAntiguedad. "<br>";
                echo "Hijos ".$cantidadHijos.": $".($cantidadHijos * 1000). "<br>";
                echo "TOTAL A COBRAR: $".$totalCobrar. "<br>";
            }

            calcularSueldo($sueldo, $antiguedad, $cantidadHijos);

  
        }

    ?>
</body>
</html>