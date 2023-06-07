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
    <h1>Ejercicio con funciones 2</h1>
    <p> 2.- Crear una función que reciba el nombre y apellido de una persona y devuelva el mensaje “Hola ... ....
¿Cómo estás?.</p>

    <form action="" method="GET">
        <input type="text" name="text">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            
            $nombre = $_GET["text"];
            
            function saludar ($nombre) {
                echo "Hola " .$nombre. " ¿Como estas?";
            }
            
            saludar($nombre);
            
        }

    ?>
</body>
</html>