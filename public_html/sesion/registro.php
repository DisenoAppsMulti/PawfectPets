<?php
// Conexión a la base de datos (reemplaza estos valores con tus propias credenciales)
$servername = "localhost";
$username = "id21558845_pawfectpets";
$password = "PawfectPets@4";
$dbname = "id21558845_integradora";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
$correo = mysqli_real_escape_string($conn, $_POST['correo']);
$contrasena = password_hash(mysqli_real_escape_string($conn, $_POST['contrasena']), PASSWORD_DEFAULT);

// Insertar datos en la base de datos utilizando sentencias preparadas
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $correo, $contrasena);
$stmt->execute();

// Manejo de errores
if ($stmt->affected_rows > 0) {
    // Registro exitoso, redirige al usuario a la nueva página
     echo'<meta http-equiv="refresh" content="1; url=../index.html">';
    exit(); // Asegura que no se ejecuten más instrucciones después de la redirección
} else {
    error_log("Error al insertar en la base de datos: " . $stmt->error);
    echo "Ha ocurrido un error durante el registro. Por favor, inténtalo de nuevo más tarde.";
}

$stmt->close();
$conn->close();
?>
