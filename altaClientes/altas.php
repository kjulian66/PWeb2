<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 300px;
      border: 1px solid black;
      border-collapse: collapse;
      border-radius: 10px;
      background-color: grey;
      color: white;
    }

    tr {
      border: 1px white solid;
    }

    input {
      width: 100%;
    }
  </style>
</head>

<body>
  <form method="POST">

    <table>
      <tr>
        <td>Nombre: <input type="text" name="nombre" maxlength="30" required></td>
      </tr>
      <tr>
        <td>Apellido: <input type="text" name="apellido" maxlength="30" required></td>
      </tr>
      <tr>
        <td>DNI: <input type="number" name="documento" min=10000000 max=100000000></td>
      </tr>
      <tr>
        <td>Domicilio: <input type="text" name="domicilio" maxlength="100" required></td>
      </tr>
      <tr>
        <td>Fecha de Nacimiento: <input type="date" name="fechaNac" required></td>
      </tr>
      <tr>
        <td>Telefono: <input type="number" name="telefono" required></td>
      </tr>
      <tr>
        <td><input type="submit" name="enviar"><br></td>
      </tr>
    </table>

  </form>
  <a href="./index.php"><button>VOLVER</button></a>
  <?php

  if (isset($_POST["enviar"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $documento = $_POST["documento"];
    $domicilio = $_POST["domicilio"];
    $fechaNac = $_POST["fechaNac"];
    $telefono = $_POST["telefono"];

    $sql = "insert into cliente (
      nombre, 
      apellido, 
      dni,
      domicilio,
      fechaNac,
      telefono)
      values (
      '$nombre',
      '$apellido',
      '$documento',
      '$domicilio',
      '$fechaNac',
      '$telefono');";

    require "conect.php";
    $conect = conect();

    mysqli_query($conect, $sql);

    if (mysqli_affected_rows($conect) > 0) {
      echo "Se cargo el cliente";
    } else {
      echo "No se cargo el cliente";
    }
  }




  ?>
</body>

</html>