<!doctype html>
<html>
<?php
$idmascota=$_GET['idmascota'];

include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mascotas where idmascota = '$idmascota'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nombre = $row['nombre'];
    $tipoAnimal = $row['tipoAnimal'];
    $raza = $row['raza'];
    $color = $row['color'];
    $peso = $row['peso'];
    $genero = $row['genero'];
    $personalidad = $row['personalidad'];
    $esterilizado = $row['esterilizado'];
    $desp = $row['desp'];
    $fechadesp = $row['fechadesp'];
    $cirugias = $row['cirugias'];
    $problemasSalud = $row['problemasSalud'];
    $tratamientos = $row['tratamientos'];
    $parvovirus = $row['parvovirus'];
    $distemper = $row['distemper'];
    $hepatitis = $row['hepatitis'];
    $leptospirosis = $row['leptospirosis'];
    $rabia = $row['rabia'];
    $tripleFelina = $row['tripleFelina'];
    $vlef = $row['vlef'];
    $notas = $row['notas'];
    $idusuarios = $row['idusuarios'];
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
    <form action="actualizandoHistorial.php" method="POST">
        <table>
            <tr>
                <td>
            <label for="nombre">Nombre</label>
            </td>
            <td>
            <input type="text" name="nombre" id="nombre"value="<?php echo $nombre;?>">
            <input type="hidden" name="idmascota" value="<?php echo $idmascota;?>">
            </td>
            </tr>
            <tr>
				<td>
					<label for="tipoAnimal">Tipo de mascota</label>
				</td>
				<td>
					<input type="text" name="tipoAnimal" id="tipoAnimal" value="<?php echo $tipoAnimal;?>">
				</td>
				<tr>
				<td>
					<label for="raza">Raza de la mascota</label>
				</td>
				<td>
					<input type="text" name="raza" id="raza" value="<?php echo $raza;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="color">Color de la mascota</label>
				</td>
				<td>
					<input type="text" name="color" id="color" value="<?php echo $color;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="peso">Peso de la mascota</label>
				</td>
				<td>
					<input type="text" name="peso" id="peso" value="<?php echo $peso;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="genero">G&eacute;nero de la mascota</label>
				</td>
				<td>
					<input type="text" name="genero" id="genero" value="<?php echo $genero;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="personalidad">Personalidad de la mascota</label>
				</td>	
				<td>
					<input type="text" name="personalidad" id="personalidad" value="<?php echo $personalidad;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="esterilizado">Esterilizado</label>
				</td>	
				<td>
					<input type="text" name="esterilizado" id="esterilizado" value="<?php echo $esterilizado;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="desp">Última desparasitación</label>
				</td>	
				<td>
					<input type="text" name="desp" id="desp" value="<?php echo $desp;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="fechadesp">Fecha de la desparasitación</label>
				</td>	
				<td>
					<input type="text" name="fechadesp" id="fechadesp" value="<?php echo $fechadesp;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="cirugias">Cirugías anteriores</label>
				</td>
				<td>
					<input type="text" name="cirugias" id="cirugias" value="<?php echo $cirugias;?>">
				</td>
				<tr>
				<td>
					<label for="problemasSalud">Problemas de salud actuales</label>
				</td>
				<td>
					<input type="text" name="problemasSalud" id="problemasSalud" value="<?php echo $problemasSalud;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="tratamientos">Tratamiento actual</label>
				</td>
				<td>
					<input type="text" name="tratamientos" id="tratamientos" value="<?php echo $tratamientos;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="parvovirus">Vacuna para Parvovirus</label>
				</td>
				<td>
					<input type="text" name="parvovirus" id="parvovirus" value="<?php echo $parvovirus;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="distemper">Vacuna para Distemper</label>
				</td>
				<td>
					<input type="text" name="distemper" id="distemper" value="<?php echo $distemper;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="hepatitis">Vacuna para hepatitis</label>
				</td>	
				<td>
					<input type="text" name="hepatitis" id="hepatitis" value="<?php echo $hepatitis;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="leptospirosis">Vacuna para Leptospirosis</label>
				</td>	
				<td>
					<input type="text" name="leptospirosis" id="leptospirosis" value="<?php echo $leptospirosis;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="rabia">Vacuna para Rabia</label>
				</td>	
				<td>
					<input type="text" name="rabia" id="rabia" value="<?php echo $rabia;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="tripleFelina">Vacuna Triple Felina</label>
				</td>	
				<td>
					<input type="text" name="tripleFelina" id="tripleFelina" value="<?php echo $tripleFelina;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="vlef">Vacuna VLeF</label>
				</td>	
				<td>
					<input type="text" name="vlef" id="vlef" value="<?php echo $vlef;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="notas">Notas</label>
				</td>	
				<td>
					<input type="text" name="notas" id="notas" value="<?php echo $notas;?>">
				</td>
				</tr>
				<tr>
				<td>
					<label for="idusuarios">ID del dueño</label>
				</td>	
				<td>
					<input type="text" name="idusuarios" id="idusuarios" value="<?php echo $idusuarios;?>">
				</td>
				</tr>
        </table>
        <input type="submit" name="Actualizar" >
    </form>
</body>
</html>
