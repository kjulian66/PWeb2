<?php

$buscar = $_POST["buscar"];
$opcion = $_POST["opcion"];

switch ($opcion) {
    case "idProducto":
        echo "Busqueda por ID <br> <br>";
        $sql = "select * from productos where idProducto = $buscar;";
        break;
    case "descripcion":
        echo "Busqueda por Descripcion <br> <br>";
        $sql = "select * from productos where descripcion = '$buscar';";
        break;
    case "precio":
        echo "Busqueda por Precio <br> <br>";
        $sql = "select * from productos where precio = $buscar;";
        break;
    default:
        echo "Busqueda indefinida";
}
