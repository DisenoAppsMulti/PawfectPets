
<!DOCTYPE html>
<html>
<style>
	.btn{
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 4px 8px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  font-size: 12px;
  border-radius: 6px;
  border: none;
  background: #DCD9D8;
  box-shadow: 0px 0.5px 1px rgba(0, 0, 0, 0.1), inset 0px 0.5px 0.5px rgba(255, 255, 255, 0.5), 0px 0px 0px 0.5px rgba(0, 0, 0, 0.12);
  color: black;
  touch-action: manipulation;
  text-decoration: none;
}
</style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Historial médico de mascotas</title>
</head>
<body><br>
    <table style="margin-left: auto; margin-right: auto;">
        <tr>
            <th style="font-size: 30px;">Historial médico de mascotas</th>
        </tr>
    </table>
    <table style="margin-left: auto; margin-right: auto; margin-bottom:5px">
        <tr>
            <td style="font-size: 20px;">Agregar historial</td>
        </tr>
    </table>
    
	<form action="guardandoHistorial.php" method="POST">
		<table style="margin-left: auto; margin-right: auto;">
			    <tr>
				<td style="width: 200px">
					<label for="nombre">Nombre de la mascota</label>
				</td>
				<td>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre">
				</td>
				<tr>
				<td>
					<label for="tipoAnimal">Tipo de mascota</label>
				</td>
				<td>
					<input type="text" name="tipoAnimal" id="tipoAnimal" placeholder="Tipo de mascota">
				</td>
				<tr>
				<td>
					<label for="raza">Raza de la mascota</label>
				</td>
				<td>
					<input type="text" name="raza" id="raza" placeholder="Raza">
				</td>
				</tr>
				<tr>
				<td>
					<label for="color">Color de la mascota</label>
				</td>
				<td>
					<input type="text" name="color" id="color" placeholder="Color">
				</td>
				</tr>
				<tr>
				<td>
					<label for="peso">Peso de la mascota</label>
				</td>
				<td>
					<input type="text" name="peso" id="peso" placeholder="Peso">
				</td>
				</tr>
				<tr>
				<td>
					<label for="genero">G&eacute;nero de la mascota</label>
				</td>
				<td>
					<input type="text" name="genero" id="genero" placeholder="Género">
				</td>
				</tr>
				<tr>
				<td>
					<label for="personalidad">Personalidad de la mascota</label>
				</td>	
				<td>
					<input type="text" name="personalidad" id="personalidad" placeholder="Personalidad">
				</td>
				</tr>
				<tr>
				<td>
					<label for="esterilizado">Esterilizado</label>
				</td>	
				<td>
					<input type="text" name="esterilizado" id="esterilizado" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="desp">Última desparasitación</label>
				</td>	
				<td>
					<input type="text" name="desp" id="desp" placeholder="Tipo de desparasitación">
				</td>
				</tr>
				<tr>
				<td>
					<label for="fechadesp">Fecha de la desparasitación</label>
				</td>	
				<td>
					<input type="text" name="fechadesp" id="fechadesp" placeholder="Fecha">
				</td>
				</tr>
				<tr>
				<td>
					<label for="cirugias">Cirugías anteriores</label>
				</td>
				<td>
					<input type="text" name="cirugias" id="cirugias" placeholder="Cirugías">
				</td>
				<tr>
				<td>
					<label for="problemasSalud">Problemas de salud actuales</label>
				</td>
				<td>
					<input type="text" name="problemasSalud" id="problemasSalud" placeholder="Problemas de salud">
				</td>
				</tr>
				<tr>
				<td>
					<label for="tratamientos">Tratamiento actual</label>
				</td>
				<td>
					<input type="text" name="tratamientos" id="tratamientos" placeholder="Tratamiento">
				</td>
				</tr>
				<tr>
				<td>
					<label for="parvovirus">Vacuna para Parvovirus</label>
				</td>
				<td>
					<input type="text" name="parvovirus" id="parvovirus" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="distemper">Vacuna para Distemper</label>
				</td>
				<td>
					<input type="text" name="distemper" id="distemper" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="hepatitis">Vacuna para hepatitis</label>
				</td>	
				<td>
					<input type="text" name="hepatitis" id="hepatitis" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="leptospirosis">Vacuna para Leptospirosis</label>
				</td>	
				<td>
					<input type="text" name="leptospirosis" id="leptospirosis" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="rabia">Vacuna para Rabia</label>
				</td>	
				<td>
					<input type="text" name="rabia" id="rabia" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="tripleFelina">Vacuna Triple Felina</label>
				</td>	
				<td>
					<input type="text" name="tripleFelina" id="tripleFelina" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="vlef">Vacuna VLeF</label>
				</td>	
				<td>
					<input type="text" name="vlef" id="vlef" placeholder="0/1">
				</td>
				</tr>
				<tr>
				<td>
					<label for="notas">Notas</label>
				</td>	
				<td>
					<input type="text" name="notas" id="notas" placeholder="Notas">
				</td>
				</tr>
				<tr>
				<td>
					<label for="idusuarios">ID del dueño</label>
				</td>	
				<td>
					<input type="text" name="idusuarios" id="idusuarios" placeholder="ID">
				</td>
				</tr>
			</tr>
		</table>
		<table style="margin-left:auto; margin-right:auto; margin-top:10px; margin-bottom:20px">
		    <tr>
		        <td><input type="submit" name="Guardar" value="Guardar"></td>
		    </tr>
		</table>
		
	</form>
	<table border="1" style="margin-left:auto; margin-right:auto;">
		<tr>
			<th colspan="8"; style="background-color: #D4EFDF;">Mascotas</th>
		</tr>
		<tr>
			<th>ID Usuario</th>
			<th>Nombre de la mascota</th>
			<th>Tipo de mascota</th>
			<th>Raza de la mascota</th>
			<th>Género de la mascota</th>
			<th>Notas</th>
			<th>Borrar</th>
			<th>Editar Información</th>
		</tr>

<?php
include "conexion.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mascotas order by idmascota desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$idmascota = $row["idmascota"];
    echo'
    	<tr>
    		<td>'. $row["idusuarios"].'</td>
    		<td>'. $row["nombre"].'</td>
    		<td>'. $row["tipoAnimal"].'</td>
    		<td>'. $row["raza"].'</td>
    		<td>'. $row["genero"].'</td>
    		<td>'. $row["notas"].'</td>
    		<td><a href="eliminarHistorial.php?idmascota='. $idmascota.'" class="btn">Eliminar Mascota</a></td>
    		<td><a href="actualizarHistorial.php?idmascota='. $idmascota.'" class="btn">Actualizar Datos</a></td>
    	</tr>
    ';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
	</table>
</body>
</html>