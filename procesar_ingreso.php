<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $email = $_POST["email"];
    $clave = $_POST["clave"];

    // Conectar a la base de datos (ajusta los detalles de conexión)
    $nombre_servidor = "mysql-test";
    $usuario = "root";
    $contraseña = "santiago2024";
    $nombre_base_datos = "consultorio";

    $conexion = new mysqli($nombre_servidor, $usuario, $contraseña, $nombre_base_datos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Consultar la base de datos para verificar el correo y la clave (ajusta según tu esquema de base de datos)
    $consulta = "SELECT nombre, apellido FROM consultorio_usuario WHERE Email = '$email' AND Clave = '$clave'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        // Usuario autenticado
        $fila = $resultado->fetch_assoc();
        $nombre_usuario = $fila["nombre"] . " " . $fila["apellido"];
        echo "¡Bienvenido, $nombre_usuario!<br>" . "  RE PUTO";
        echo "\n";
        echo "\n Seleccione su turno, cornudo";
    } else {
        // Credenciales incorrectas
        echo "Credenciales incorrectas. Por favor, intenta nuevamente.";
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
