<?php
require "conexion.php";
function listarDatos()
{
  $conexion = conexion();
  $sql = "select * from productos;";
  $resulset = mysqli_query($conexion, $sql);
  return $resulset;
}
