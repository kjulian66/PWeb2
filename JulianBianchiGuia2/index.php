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
  <h1>INICIO</h1>
  <a href="cargarDatos.php">CARGAR DATOS</a>
  <a href="listarDatos.php">LISTAR DATOS</a>
  <br><br><br><br>
  <form method="POST" action="buscar.php">
    <table>
      <tr>
        <td><input type="text" placeholder="Buscar" name="buscar" maxlength="10" required></td>
      </tr>
      <tr>
        <td><select name="opcion" id="">
          <option value="idProducto">ID Producto</option>
          <option value="descripcion">Descripcion</option>
          <option value="precio">Precio</option>
        </select></td>
      </tr>
      <tr>
        <td><button id="botonEnviar" type="submit" name="ENVIAR">ENVIAR</button></td>
      </tr>
    </table>
  </form>
  </form>
</body>

</html>