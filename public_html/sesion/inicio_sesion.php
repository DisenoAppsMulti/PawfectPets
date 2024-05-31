<?php
// Verificar si se han enviado datos de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    $correo = mysqli_real_escape_string($conn, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conn, $_POST['contrasena']);

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT nombre, contrasena FROM usuarios WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($contrasena, $row['contrasena'])) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION['nombre'] = $row['nombre'];

            // Redireccionar a la página de inicio después de iniciar sesión
             echo'<meta http-equiv="refresh" content="1; url=../index.html">';
            exit();
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }

    $conn->close();
}
?>
