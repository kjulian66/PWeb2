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
    <h1>Ejercicio 8</h1>
    <p> 8.- Escribir el programa para que calcule el cuadrado de un numero, y en caso de ingresar un numero negativo me
muestre “Debe ingresar un nùmero mayor a cero”</p>

    <form action="" method="GET">
        <input type="number" name="number1">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $number1 = $_GET["number1"];

            function potencia ($num1) {
                $resultado = pow($num1, 2);
                return $resultado;
            }

            $resultado = potencia ($number1);

            if($number1 >= 0) {
                echo "POTENCIA: ";
                echo $resultado;
            }

            else {
                echo "Debe ingresar un numero mayo a cero";
            }
            
        }
  
    ?>
</body>
</html>