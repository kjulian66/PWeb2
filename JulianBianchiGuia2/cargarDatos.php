<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../JulianBianchiGuia2/style.css">
</head>

<body>
  <h1>CARGAR DATOS</h1>
  <form method="POST" action="consultaCarga.php">
    <table>
      <tr>
        <td><input type="text" placeholder="Descripcion" name="descripcion" maxlength="10" required></td>
      </tr>
      <tr>
        <td><input type="number" placeholder="Precio" name="precio" minlength="1" maxlength="8" required></td>
      </tr>
      <tr>
        <td><button id="botonEnviar" type="submit" name="ENVIAR">ENVIAR</button></td>
      </tr>
    </table>
  </form>

  <a href="index.php">VOLVER</a>
  <a href="listarDatos.php">LISTAR DATOS</a>

</body>

</html>