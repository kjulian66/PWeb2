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
    <h1>Ejercicio 4</h1>
    <p> 4.- Escribir un programa que solo me permita ingresar un numero positivo y me muestre todos los numeros que le
anteceden desde el 1.</p>

    <form action="" method="GET">
        <input type="number" name="number">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["number"])){
            $input = $_GET["number"];
            
            function conteo ($input) {
                for($i = $input; $i > 0; $i--){
                    echo $i;
                    echo "<br>";
                }
            }
            if($input >= 0) {
                conteo($input);
            }
            else {
                echo "El numero no puede ser negativo";
            }
            
        }
  
    ?>
</body>
</html>