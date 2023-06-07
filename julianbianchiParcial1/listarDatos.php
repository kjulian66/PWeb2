<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>LISTAR DATOS</h1>

  <?php
  require "consultaListar.php";
  $conexion = conexion();
  $listar = listarDatos();


  if (mysqli_num_rows($listar) > 0) {
  ?>
    <table id="tablaListar">
      <tr>
        <th>ID Empleado</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <th>Fecha de Nacimiento</th>
        <th>Salario</th>
      </tr>
      <?php
      while ($registro = mysqli_fetch_assoc($listar)) {
      ?>
        <tr>
          <td><?php echo $registro["idEmpleado"] ?></td>
          <td><?php echo $registro["nombre"] ?></td>
          <td><?php echo $registro["apellido"] ?></td>
          <td><?php echo $registro["documento"] ?></td>
          <td><?php echo $registro["fechaNac"] ?></td>
          <td><?php echo "$" . $registro["salario"] ?></td>
        </tr>
      <?php
      }
      ?>
    </table>
  <?php
  } else {
  ?>
    <h1>NO HAY DATOS CARGADOS</h1>
  <?php
  }
  ?>



  <a href="index.php">VOLVER</a>
  <a href="cargarDatos.php">CARGAR DATOS</a>
</body>



</html>