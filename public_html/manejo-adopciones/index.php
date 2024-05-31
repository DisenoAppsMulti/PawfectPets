
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
	<title>Animales en Adopción</title>
</head>
<body><br>
    <table style="margin-left: auto; margin-right: auto;">
        <tr>
            <th style="font-size: 30px;">Animales en Adopción</th>
        </tr>
    </table>
    <table style="margin-left: auto; margin-right: auto; margin-bottom:5px">
        <tr>
            <td style="font-size: 20px;">Dar de alta</td>
        </tr>
    </table>
    
	<form action="guardandoAnimal.php" method="POST">
		<table style="margin-left: auto; margin-right: auto;">
			<tr>
				<td>
					<label for="nombre">Nombre</label>
				</td>
				<td>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre del animal">
				</td>
				<tr>
				<td>
					<label for="genero">G&eacute;nero</label>
				</td>
				<td>
					<input type="text" name="genero" id="genero" placeholder="Género del animal">
				</td>
				</tr>
				<tr>
				<td>
					<label for="anio">Tama&ntilde;o</label>
				</td>	
				<td>
					<input type="text" name="tamano" id="tamano" placeholder="Tamaño del animal">
				</td>
				</tr>
				<tr>
				<td>
					<label for="anio">Descripci&oacute;n</label>
				</td>	
				<td>
					<input type="text" name="descripcion" id="descripcion" placeholder="Descripción del animal">
				</td>
				</tr>
				<tr>
				<td>
					<label for="anio">Imagen</label>
				</td>	
				<td>
					<input type="text" name="imagen" id="imagen" placeholder="Nombre de la imagen">
				</td>
				</tr>
				<tr>
				<td style="width: 110px">
					<label for="anio">Tipo de animal</label>
				</td>	
				<td>
					<input type="text" name="tipoanimal" id="tipoanimal" placeholder="Perro o gato">
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
			<th colspan="8"; style="background-color: #D4EFDF;">Animales</th>
		</tr>
		<tr>
			<th>Nombre</th>
			<th>G&eacute;nero</th>
			<th>Tama&ntilde;o</th>
			<th>Descripci&oacute;n</th>
			<th>Imagen</th>
			<th>Tipo de animal</th>
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

$sql = "SELECT * FROM adopcion order by idanimal desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	$idanimal = $row["idanimal"];
    echo'
    	<tr>
    		<td>'. $row["nombre"].'</td>
    		<td>'. $row["genero"].'</td>
    		<td>'. $row["tamano"].'</td>
    		<td>'. $row["descripcion"].'</td>
    		<td>'. $row["imagen"].'</td>
    		<td>'. $row["tipoanimal"].'</td>
    		<td><a href="eliminarAnimal.php?idanimal='. $idanimal.'" class="btn">Eliminar Animal</a></td>
    		<td><a href="actualizarAnimal.php?idanimal='. $idanimal.'" class="btn">Actualizar Datos</a></td>
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