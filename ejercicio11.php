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
    <h1>Ejercicio 11</h1>
    <p> 11.- Crear un programa que me permita ingresar 10 numeros a traves de un formulario. Al enviarlos me debe
mostrar:

<br> a) Cuantos de los numeros son positivos y cuantos negativos
<br> b) Cuantos son pares
<br> c) Cuantos son mayores a 10 y menores a 90
<br> d) Cual es la suma total de los numeros ingresados</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="number" name="number3">
        <input type="number" name="number4">
        <input type="number" name="number5">
        <input type="number" name="number6">
        <input type="number" name="number7">
        <input type="number" name="number8">
        <input type="number" name="number9">
        <input type="number" name="number10">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $num1 = $_GET["number1"];
            $num2 = $_GET["number2"];
            $num3 = $_GET["number3"];
            $num4 = $_GET["number4"];
            $num5 = $_GET["number5"];
            $num6 = $_GET["number6"];
            $num7 = $_GET["number7"];
            $num8 = $_GET["number8"];
            $num9 = $_GET["number9"];
            $num10 = $_GET["number10"];

            function positivos ($num) {
                $cont = 0;
                if ($num > 0) {
                    $cont = $cont + 1;
                }
                return $cont;
            }

            $contPositivos = positivos($num1) + positivos($num2) + positivos($num3) + positivos($num4) + positivos($num5) + positivos($num6) + positivos($num7) + positivos($num8) + positivos($num9) + positivos($num10);
            echo "La cantidad de numeros positivos es: ";
            echo $contPositivos;
            echo "<br>";

            function negativos ($num) {
                $cont = 0;
                if ($num < 0) {
                    $cont = $cont + 1;
                }
                return $cont;
            }

            $contNegativos = negativos($num1) + negativos($num2) + negativos($num3) + negativos($num4) + negativos($num5) + negativos($num6) + negativos($num7) + negativos($num8) + negativos($num9) + negativos($num10);
            echo "La cantidad de numeros negativos es: ";
            echo $contNegativos;
            echo "<br>";

            function pares ($num) {
                $cont = 0;
                if ($num % 2 == 0) {
                    $cont = $cont + 1;
                }
                return $cont;
            }

            $contPares = pares($num1) + pares($num2) + pares($num3) + pares($num4) + pares($num5) + pares($num6) + pares($num7) + pares($num8) + pares($num9) + pares($num10);
            echo "La cantidad de numeros pares es: ";
            echo $contPares;
            echo "<br>";

            function menores90 ($num) {
                $cont = 0;
                if ($num < 90) {
                    $cont = $cont + 1;
                }
                return $cont;
            }

            $contMenores90 = menores90($num1) + menores90($num2) + menores90($num3) + menores90($num4) + menores90($num5) + menores90($num6) + menores90($num7) + menores90($num8) + menores90($num9) + menores90($num10);
            echo "La cantidad de numeros menores que 90 es: ";
            echo $contMenores90;
            echo "<br>";

            function mayores10 ($num) {
                $cont = 0;
                if ($num > 10) {
                    $cont = $cont + 1;
                }
                return $cont;
            }

            $contMayores10 = mayores10($num1) + mayores10($num2) + mayores10($num3) + mayores10($num4) + mayores10($num5) + mayores10($num6) + mayores10($num7) + mayores10($num8) + mayores10($num9) + mayores10($num10);
            echo "La cantidad de numeros mayores que 10 es: ";
            echo $contMayores10;
            echo "<br>";

            function suma ($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10) {
                $resultadoSuma = $num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10;
                return $resultadoSuma;
            }

            echo "La suma de todos los numeros es: ";
            echo suma($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
            echo "<br>";
        }

    ?>
</body>
</html>