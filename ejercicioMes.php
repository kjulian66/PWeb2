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

    <h1>Ejercicio Mes</h1>
    <p> Crear un programa que pida al usuario ELEGIR un mes (usar select) y que me diga cuantos días tiene ese mes.
Usar una función cantidadDias(), que reciba por parámetro el mes.
Dentro de la función usar SWITCH.</p>

    <form action="" method="POST">
        Elegir Mes: <select name="Mes" id="" placeholder="Mes">
            <option value="opcionMes" selected>Mes</option>
            <option value="Enero">Enero</option>
            <option value="Febrero">Febrero</option>
            <option value="Marzo">Marzo</option>
            <option value="Abril">Abril</option>
            <option value="Mayo">Mayo</option>
            <option value="Junio">Junio</option>
            <option value="Julio">Julio</option>
            <option value="Agosto">Agosto</option>
            <option value="Septiembre">Septiembre</option>
            <option value="Octubre">Octubre</option>
            <option value="Noviembre">Noviembre</option>
            <option value="Diciembre">Diciembre</option>
        </select>
        <input id="button" type="submit" name="ENVIAR">
    </form>

    <?php
    
        if(isset($_POST["ENVIAR"])){
            $mes = $_POST["Mes"];

            function cantidadDias ($mes) {
                switch ($mes) {
                    case "Enero":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Febrero":
                        if(date("Y")%4==0) {
                            echo "El mes ".$mes. " tiene 29 dias este año";
                        } else {
                            echo "El mes ".$mes. " tiene 28 dias este año";
                        }
                        break;
                    case "Marzo":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Abril":
                        echo "El mes ".$mes. " tiene 30 dias";
                        break;
                    case "Mayo":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Junio":
                        echo "El mes ".$mes. " tiene 30 dias";
                        break;
                    case "Julio":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Agosto":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Septiembre":
                        echo "El mes ".$mes. " tiene 30 dias";
                        break;
                    case "Octubre":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    case "Noviembre":
                        echo "El mes ".$mes. " tiene 30 dias";
                        break;
                    case "Diciembre":
                        echo "El mes ".$mes. " tiene 31 dias";
                        break;
                    default:
                        echo "No ha seleccionado un mes";
                }
                
            }

            cantidadDias($mes);
            
            
        }
    
    
    
    ?>
</body>
</html>