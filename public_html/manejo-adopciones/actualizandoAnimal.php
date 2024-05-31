<?php

include "conexion.php";

$idanimal = $_POST["idanimal"];
$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$tamano = $_POST['tamano'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];
$tipoanimal = $_POST['tipoanimal'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE adopcion SET nombre ='$nombre', genero = '$genero', tamano = '$tamano', descripcion = '$descripcion', imagen = '$imagen', tipoanimal = '$tipoanimal' WHERE idanimal='$idanimal'";

if ($conn->query($sql) === TRUE) {
echo "Animal actualizado exitosamente";
echo'<meta http-equiv="refresh" content="1; url=index.php">';

// ALTERNATIVA AL HEADER
echo '';
} else {

echo "Error updating record: " . $conn->error;
}

$conn->close();
?>