<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../JulianBianchiGuia2/style.css">
  <title>Document</title>
</head>

<body>
  <?php

  $idProducto = $_POST["idProducto"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];

  require "conexion.php";
  $conexion = conexion();

  $sql = "update productos set descripcion = '$descripcion', precio = $precio where idProducto = $idProducto;";

  mysqli_query($conexion, $sql);

  if (mysqli_affected_rows($conexion) > 0) {
    echo "Modificacion realizada";
  } else {
    echo "No se pudo realizar la modificacion";
  }
  ?>
  <br><br><br>
  <a href="index.php">VOLVER</a>
</body>

</html>