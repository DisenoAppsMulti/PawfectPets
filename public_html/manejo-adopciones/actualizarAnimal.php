<!doctype html>
<html>
<?php
$idanimal=$_GET['idanimal'];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM adopcion where idanimal = '$idanimal'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nombre = $row['nombre'];
    $genero = $row['genero'];
    $tamano = $row['tamano'];
    $descripcion = $row['descripcion'];
    $imagen = $row['imagen'];
    $tipoanimal = $row['tipoanimal'];
  }
} else {
  echo "0 results";
}
$conn->close();

?>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-wodth, initial-scale=1">

</head>
<body>
    <form action="actualizandoAnimal.php" method="POST">
        <table>
            <tr>
                <td>
            <label for="nombre">Nombre</label>
            </td>
            <td>
            <input type="text" name="nombre" id="nombre"value="<?php echo $nombre;?>">
            <input type="hidden" name="idanimal" value="<?php echo $idanimal;?>">
            </td>
            </tr>
            <tr>
                <td>
            <label for="genero">Género</label>
            </td>
            <td>
            <input type="text" name="genero" id="genero" value="<?php echo $genero;?>">
            </td>
            </tr>
            <tr>
                <td>
            <label for="genero">Tamaño</label>
            </td>
            <td>
            <input type="text" name="tamano" id="tamano" value="<?php echo $tamano;?>">
            </td>
            </tr>
            <tr>
                <td>
            <label for="genero">Descripción</label>
            </td>
            <td>
            <input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion;?>">
            </td>
            </tr>
            <tr>
                <td>
            <label for="genero">Imagen</label>
            </td>
            <td>
            <input type="text" name="imagen" id="imagen" value="<?php echo $imagen;?>">
            </td>
            </tr>
            <tr>
                <td>
            <label for="genero">Tipo de animal</label>
            </td>
            <td>
            <input type="text" name="tipoanimal" id="tipoanimal" value="<?php echo $tipoanimal;?>">
            </td>
            </tr>
        </table>
        <input type="submit" name="Actualizar" >
    </form>
</body>
</html>
