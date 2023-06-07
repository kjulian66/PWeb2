<?php
function conexion () {
    $servidor = "localhost";
    $usuarioBD = "root";
    $passBD = "";
    $baseDeDatos = "negociojb";
    $conexion = mysqli_connect($servidor, $usuarioBD, $passBD, $baseDeDatos) or die("No se pudo conectar a la base de datos");
    return $conexion;
}
?>