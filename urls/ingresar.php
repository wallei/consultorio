<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Ingresar</h1>
        <form action="procesar_ingreso.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="clave">Clave:</label>
            <input type="password" id="clave" name="clave" required>

            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>
