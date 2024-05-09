<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
<h1>Nuevo Registro</h1>
<form action="../acciones/crear.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="Nombre_Escuela" required>
    <br>
    <label for="numero">Número de alumnos:</label>
    <input type="number" name="Num_alumn" required>
    <br>
    <input type="submit" value="Crear">
</form>
</body>
</html>