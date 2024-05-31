<?php
$nombre = $_POST['nombre'];
$tipoAnimal = $_POST['tipoAnimal'];
$raza = $_POST['raza'];
$color = $_POST['color'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$personalidad = $_POST['personalidad'];
$esterilizado = $_POST['esterilizado'];
$desp = $_POST['desp'];
$fechadesp = $_POST['fechadesp'];
$cirugias = $_POST['cirugias'];
$problemasSalud = $_POST['problemasSalud'];
$tratamientos = $_POST['tratamientos'];
$parvovirus = $_POST['parvovirus'];
$distemper = $_POST['distemper'];
$hepatitis = $_POST['hepatitis'];
$leptospirosis = $_POST['leptospirosis'];
$rabia = $_POST['rabia'];
$tripleFelina = $_POST['tripleFelina'];
$vlef = $_POST['vlef'];
$notas = $_POST['notas'];
$idusuarios = $_POST['idusuarios'];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mascotas (nombre, tipoAnimal, raza, color, peso, genero, personalidad, esterilizado, desp, fechadesp, cirugias, problemasSalud, tratamientos, parvovirus, distemper, hepatitis, leptospirosis, rabia, tripleFelina, vlef, notas, idusuarios)
VALUES ('$nombre', '$tipoAnimal', '$raza', '$color', '$peso', '$genero', '$personalidad', '$esterilizado', '$desp', '$fechadesp', '$cirugias', '$problemasSalud', '$tratamientos', '$parvovirus', '$distemper', '$hepatitis', '$leptospirosis', '$rabia', '$tripleFelina', '$vlef', '$notas', '$idusuarios')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo'<meta http-equiv="refresh" content="1; url=index.php">';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>