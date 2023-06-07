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
    <h1>Ejercicio con funciones 1</h1>
    <p> 1.- Crear una función calcularEdad que reciba una fecha de nacimiento y devuelva la edad actual de la
persona.</p>

    <form action="" method="GET">
        <input type="date" name="date">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            
            $date = $_GET["date"];
            
            function calcularEdad ($date) {
                $edad = (date("Y")) - ($date / 1);
                echo $edad;
            }
            
            
            calcularEdad($date);
            
        }

    ?>
</body>
</html>