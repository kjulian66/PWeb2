<?php
require "conexion.php";
$conect = conect();
$sqlListar = "select * from cliente;";
$resulset = mysqli_query($conect, $sqlListar);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,
    th,
    tr,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <h1>LISTADO CLIENTES</h1>
  <table>
    <tr>
      <th>ID Cliente</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>DNI</th>
      <th>Domicilio</th>
      <th>Fecha Nacimiento</th>
      <th>Telefono</th>
    </tr>
    <?php
      while ($registro = mysqli_fetch_row($resulset)) {
        ?>
        <tr>
          <td><?php echo $registro[0];?></td>
          <td><?php echo $registro[1];?></td>
          <td><?php echo $registro[2];?></td>
          <td><?php echo $registro[3];?></td>
          <td><?php echo $registro[4];?></td>
          <td><?php echo $registro[5];?></td> 
          <td><?php echo $registro[6];?></td> 
        </tr>
      <?php
      }
    ?>
    
    
  </table>
  <a href="./index.php"><button>VOLVER</button></a>
</body>

</html>