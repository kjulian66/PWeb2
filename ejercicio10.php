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
    <h1>Ejercicio 10</h1>
    <p> 10.- Ingresar 5 numeros a traves de un formulario y que me diga cual es el mayor y cual el menor.</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input type="number" name="number2">
        <input type="number" name="number3">
        <input type="number" name="number4">
        <input type="number" name="number5">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $num1 = $_GET["number1"];
            $num2 = $_GET["number2"];
            $num3 = $_GET["number3"];
            $num4 = $_GET["number4"];
            $num5 = $_GET["number5"];

            // Encontrar el número mayor
            $mayor = $num1;
            if($num2 > $mayor) {
                $mayor = $num2;
            }
            if($num3 > $mayor) {
                $mayor = $num3;
            }
            if($num4 > $mayor) {
                $mayor = $num4;
            }
            if($num5 > $mayor) {
                $mayor = $num5;
            }

            // Encontrar el número menor
            $menor = $num1;
            if($num2 < $menor) {
                $menor = $num2;
            }
            if($num3 < $menor) {
                $menor = $num3;
            }
            if($num4 < $menor) {
                $menor = $num4;
            }
            if($num5 < $menor) {
                $menor = $num5;
            }

            // Mostrar los resultados al usuario
            echo "El número mayor es: " . $mayor . "<br>";
            echo "El número menor es: " . $menor;

                }
    ?>
</body>
</html>