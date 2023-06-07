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
    <h1>Ejercicio con funciones 4</h1>
    <p> 4.- Crear una función que reciba un numero entero y me diga que día de la semana es, si el número no está
entre 1 y 7 que me diga que el día no existe.</p>

    <form action="" method="GET">
        <input type="number" name="number">
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php 
        if(isset($_GET["ENVIAR"])){
            
            $num = $_GET["number"];
            
            function diaDeLaSemana ($num1) {
                switch ($num1) {
                    case 1:
                        echo "Lunes";
                        break;
                    case 2: 
                        echo "Martes";
                        break;
                    case 3: 
                        echo "Miercoles";
                        break;
                    case 4:
                        echo "Jueves";
                        break;
                    case 5: 
                        echo "Viernes";
                        break;
                    case 6: 
                        echo "Sabado";
                        break;
                    case 7:
                        echo "Domingo";
                        break;
                    default:
                        echo "El dia no existe";
                }
            }
             diaDeLaSemana($num);
            
        }

    ?>
</body>
</html>