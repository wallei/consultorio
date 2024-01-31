<?php
// Conexión a la base de datos
$servername = "tu_servidor_mysql";
$username = "tu_usuario_mysql";
$password = "tu_contrasena_mysql";
$dbname = "usuarios";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = password_hash($_POST['clave'], PASSWORD_DEFAULT); // Hash de la contraseña

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, email, clave) VALUES ('$nombre', '$apellido', '$email', '$clave')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
