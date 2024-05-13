<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" href="./../../css/csseditar_crear.css">
    <link rel="stylesheet" href="./../../css/style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="./../../img/logoextendido.png" alt="LOGO">
        </div>
        <div class="titulo">
        <h1>Nou alumne</h1>
        </div>
    </header>

<form action="./../../acciones/crear.php" method="post">
    <div class="formuuu">
    <label for="Matricula_Alumne">Matricula Alumne</label>
    <br>
    <input type="text" id="Matricula_Alumne" name="Matricula_Alumne" required>
    <br>
    <label for="DNI_Alumne">DNI</label>
    <br>
    <input type="text" id="DNI_Alumne" name="DNI_Alumne" required>
    <br>
    <label for="Nom_Alumne">Nom Alumne</label>
    <br>
    <input type="text" id="Nom_Alumne" name="Nom_Alumne">
    <br>
    <label for="Primer_Cognom_Alumne">Primer Cognom Alumne</label>
    <br>
    <input type="text" id="Primer_Cognom_Alumne" name="Primer_Cognom_Alumne" required>
    <br>
    <label for="Segon_Cognom_Alumne">Segon Cognom Alumne</label>
    <br>
    <input type="text" id="Segon_Cognom_Alumne" name="Segon_Cognom_Alumne" required>
    <br>
    <label for="Telefon_Alumne">Telèfon Alumne</label>
    <br>
    <input type="tel" id="Telefon_Alumne" name="Telefon_Alumne" required>
    <br>
    <label for="Correu_Alumne">Correu Alumne</label>
    <br>
    <input type="email" id="Correu_Alumne" name="Correu_Alumne" required>
    <br>
    <label for="Sexe_Alumne">Sexe Alumne</label>
    <br>
    <select id="Sexe_Alumne" name="Sexe_Alumne" class="selectform" required>
        <option value="Home">Home</option>
        <option value="Dona">Dona</option>
        <option value="No binari">No binari</option>
    </select>
    <br>
    </div>
<input type="submit" value="Crear" class="button_form">
</form>
</body>
</html>