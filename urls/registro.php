<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="registrar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="clave">Clave:</label>
        <input type="password" name="clave" required><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
