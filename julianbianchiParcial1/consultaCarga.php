<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <?php
  if (isset($_POST["ENVIAR"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $documento = $_POST["documento"];
    $fechaNac = $_POST["fechaNac"];
    $salario = $_POST["salario"];

    $sql = "insert into empleados (
      nombre,
      apellido,
      documento,
      fechaNac,
      salario)
      values (
        '$nombre',
        '$apellido',
        '$documento',
        '$fechaNac',
        '$salario'
      );";

    require "conexion.php";
    $conexion = conexion();

    mysqli_query($conexion, $sql);

    if (mysqli_affected_rows($conexion) > 0) {
      echo "Se cargo empleado <br>";
      echo "<a href='cargarDatos.php'>VOLVER</a>";
    } else {
      echo "No se cargo empleado <br>";
      echo "<a href='cargarDatos.php'>VOLVER</a>";
    }
  }
  ?>
</body>

</html>