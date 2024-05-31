<?php
$idanimal=$_GET['idanimal'];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM adopcion WHERE idanimal = $idanimal";

if ($conn->query($sql) === TRUE) {
  echo "Eliminamos el animal correctamente de la base de datos";
  echo'<meta http-equiv="refresh" content="1; url=index.php">';
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>