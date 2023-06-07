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
    <h1>Ejercicio con funciones 3</h1>
    <p> 3.- Crear una función que reciba 3 notas de un alumno, calcule su promedio y devuelva si el alumno está
aprobado, desaprobado o aplazado. (se aprueba con 7, se aplaza si es menor a 4)</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="number" name="number3">

        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            
            $num1 = $_GET["number1"];
            $num2 = $_GET["number2"];
            $num3 = $_GET["number3"];

            
            function calcularPromedio ($num1, $num2, $num3) {
                $promedio = ($num1 + $num2 + $num3) / 3;
                if ($promedio >= 7) {
                    echo "Con un promedio de: ".$promedio. " el alumno esta APROBADO";
                }
                else {
                    echo "Con un promedio de: ".$promedio. " el alumno esta DESAPROBADO";
                }
            
            }
            
            calcularPromedio($num1, $num2, $num3);
            
        }

    ?>
</body>
</html>