<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style.css">
    <title>Document</title>
    <style>
        table, th, td, tr {
            border: 1px solid white;
            border-collapse: collapse;
            width: 700px;
            text-align: center;
        }
        th {
            background-color: brown;
        }
        tr {
            background-color: grey;
        }
        td{
            width: 100px;
        }
        
    </style>
</head>
<body>
    <h1>Ejercicio Horarios Tabla</h1>
    <table>
        <tr>
            <th colspan="6">2023 <p>     </p> SISTEMAS</th>
            <th>1° A</th>
        </tr>
        <tr>
            <th>HORA</th>
            <th>LUNES</th>
            <th>MARTES</th>
            <th>MIERCOLES</th>
            <th>JUEVES</th>
            <th>VIERNES</th>
            <th rowspan="6">VESPERTINO</th>
        </tr>
        <tr>
            <th>1° 17,40 a 18,30</th>
            <td>Ingles I</td>
            <td>Ciencia, Tecnologia y Sociedad</td>
            <td>Sistemas y Organizaciones</td>
            <td>Arquitectura de Computadores</td>
            <td>Analisis Matematico I</td>
        </tr>
        <tr>
            <th>2° 18,30 a 19,20</th>
            <td>Ingles I</td>
            <td>Ciencia, Tecnologia y Sociedad</td>
            <td>Sistemas y Organizaciones</td>
            <td>Arquitectura de Computadores</td>
            <td>Analisis Matematico I</td>
        </tr>
        <tr>
            <th>3° 19,25 a 20,15</th>
            <td>Algoritmos y Estructuras de Datos I</td>
            <td>Practicas Profecionalizantes I</td>
            <td>Practicas Profecionalizantes I</td>
            <td></td>
            <td>Algebra</td>
        </tr>
        <tr>
            <th>4° 20,15 a 21,05</th>
            <td>Algoritmos y Estructuras de Datos I</td>
            <td>Practicas Profecionalizantes I</td>
            <td>Practicas Profecionalizantes I</td>
            <td></td>
            <td>Algebra</td>
        </tr>
        <tr>
            <th>5° 21,10 a 22,00</th>
            <td>Algoritmos y Estructuras de Datos I</td>
            <td>Algoritmos y Estructuras de Datos I</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>