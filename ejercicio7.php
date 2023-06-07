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
    <h1>Ejercicio 7</h1>
    <p> 7.- Crear un programa que me permita ingresar 2 numeros, los reste y que me muestre el resultado y me diga si el
numero obtenido es positivo o negativo.</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $number1 = $_GET["number1"];
            $number2 = $_GET["number2"];

            function resta ($num1, $num2) {
                $resultado = $num1 - $num2;
                return $resultado;
            }

            $resultado = resta($number1, $number2);

            if ($resultado > 0){
                echo "El resultado es positivo";
            }
            else if ($resultado == 0) {
                echo "El resultado es cero";
            }
            else {
                echo "El resultado es negativo";
            }
            
        }
  
    ?>
</body>
</html>