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
    <h1>Ejercicio 9</h1>
    <p> 9.- Crear un programa que sume todos los enteros desde el 1, siempre que la suma no supere 1500. Mostrar por
pantalla cuantos números se sumaron y el resultado obtenido.</p>

    <form action="" method="GET">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $sum = 0;
            $count = 0;
            $max_num = 1500;

            for ($i = 1; $i <= $max_num; $i++) {
                if ($sum + $i > $max_num) {
                    break;
                }
                $sum += $i;
                $count++;
            }
            echo $sum;
            echo "<br>";
            echo $count;
        }
  
    ?>
</body>
</html>