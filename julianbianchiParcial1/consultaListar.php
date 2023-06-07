<?php
require "conexion.php";
function listarDatos()
{
  $conexion = conexion();
  $sql = "select * from empleados;";
  $resulset = mysqli_query($conexion, $sql);
  return $resulset;
}
