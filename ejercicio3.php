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
    <h1>Ejercicio 3</h1>
    <p> 3.- Crear un programa que muestre los numeros del 150 al 0.</p>

    <form action="" method="GET">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            $enviar = $_GET["ENVIAR"];
            
            function conteo ($enviar) {
                $iterador = 151;
                for($i = 150; $i > 0; $i--){
                    $iterador = $iterador - 1;
                    echo $iterador;
                    echo "<br>";
                }
            }
            conteo($enviar);
        }
  
    ?>
</body>
</html>