<?php
function conexion()
{

  $servidor = "localhost";
  $usuarioBD = "root";
  $passBD = "";
  $baseDeDatos = "julianbianchiParcial1";
  $conexion = mysqli_connect($servidor, $usuarioBD, $passBD, $baseDeDatos) or die("No se pudo cargar a la base de datos");
  return $conexion;
}
