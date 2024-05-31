<?php

include "conexion.php";

$idmascota = $_POST["idmascota"];
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE mascotas SET nombre ='$nombre', tipoAnimal = '$tipoAnimal', raza = '$raza', color = '$color', peso = '$peso', genero = '$genero', personalidad = '$personalidad', esterilizado = '$esterilizado', desp = '$desp', fechadesp = '$fechadesp', cirugias = '$cirugias', problemasSalud = '$problemasSalud', tratamientos = '$tratamientos', parvovirus = '$parvovirus', distemper = '$distemper', hepatitis = '$hepatitis', leptospirosis = '$leptospirosis', rabia = '$rabia', tripleFelina = '$tripleFelina', vlef = '$vlef', notas = '$notas', idusuarios = '$idusuarios' WHERE idmascota='$idmascota'";

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