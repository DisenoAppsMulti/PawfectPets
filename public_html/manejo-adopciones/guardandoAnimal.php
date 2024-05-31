<?php
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$tamano = $_POST['tamano'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$tipoanimal = $_POST['tipoanimal'];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO adopcion (nombre, genero, tamano, descripcion, imagen, tipoanimal)
VALUES ('$nombre', '$genero', '$tamano', '$descripcion', '$imagen', '$tipoanimal')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo'<meta http-equiv="refresh" content="1; url=index.php">';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>