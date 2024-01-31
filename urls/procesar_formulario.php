<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $clave = $_POST["clave"];

    // Realizar acciones adicionales, como almacenar los datos en una base de datos
    // Asegúrate de tener una conexión a la base de datos y realizar la inserción

    // Ejemplo de respuesta
    echo "¡Registro exitoso!<br>";
    echo "Nombre: $nombre<br>";
    echo "Apellido: $apellido<br>";
    echo "Fecha de Nacimiento: $fecha_nacimiento<br>";
    echo "DNI: $dni<br>";
    echo "Teléfono: $telefono<br>";
    echo "Correo Electrónico: $email<br>";
    // ¡No deberías imprimir la contraseña en un entorno de producción!
}
?>
