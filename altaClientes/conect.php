<?php

function conect()
{

  $servidor = "localhost";
  $usuarioBD = "root";
  $passBD = "";
  $baseDeDatos = "negocio";
  $conect = mysqli_connect($servidor, $usuarioBD, $passBD, $baseDeDatos) or die("No se pudo conectar a la base de datos");

  return $conect;
}
