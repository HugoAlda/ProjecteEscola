<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    <link rel="stylesheet" href="../../CSS/csseditar_crear.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="./../../img/logoextendido.png" alt="LOGO">
    </div>
    <div class="titulo">
    <h1>Nou Professor</h1>
    </div>
</header>


<form action="../acciones/crear.php" method="POST">
    <label for="DNI_Professor">DNI</label>
    <br>
    <input type="text" id="DNI_Professor" name="DNI_Professor" required>
    <br>
    <label for="Nom_Professor">Nom Professor</label>
    <br>
    <input type="text" id="Nom_Professor" name="Nom_Professor" required>
    <br>
    <label for="Primer_Cognom_Professor">Primer Cognom Professor</label>
    <br>
    <input type="text" id="Primer_Cognom_Professor" name="Primer_Cognom_Professor" required>
    <br>
    <label for="Segon_Cognom_Professor">Segon Cognom Professor</label>
    <br>
    <input type="text" id="Segon_Cognom_Professor" name="Segon_Cognom_Professor" required>
    <br>
    <label for="Telefon_Professor">Telèfon Professor</label>
    <br>
    <input type="tel" id="Telefon_Professor" name="Telefon_Professor" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
    <br>
    <label for="Correu_Professor">Correu Professor</label>
    <br>
    <input type="email" id="Correu_Professor" name="Correu_Professor" required>
    <br>
    <label for="Sexe_Professor">Sexe Professor</label>
    <br>
    <select id="Sexe_Professor" name="Sexe_Professor" required>
        <option value="Home">Home</option>
        <option value="Dona">Dona</option>
        <option value="No binari">No binari</option>
    </select>
    <br>
    <label for="Tutor_Assignat">Tutor Assignat</label>
    <br>
    <select id="Tutor_Assignat" name="Tutor_Assignat" required>
        <option value="ASIX/DAW1">ASIX/DAW1</option>
        <option value="ASIX2">ASIX2</option>
        <option value="DAW2">DAW2</option>
        <option value="SMX1">SMX1</option>
        <option value="SMX2">SMX2</option>
        <option value="No es tutor">No es tutor</option>
    </select>
    <br>
    <label for="Curs_Assignat">Curs Assignat</label>
    <br>
    <input type="text" id="Curs_Assignat" name="Curs_Assignat" required>
    <br>
    <label for="Carrec_Professor">Carrec Professor</label>
    <br>    
    <select id="Carrec_Professor" name="Carrec_Professor" required>
        <option value="Profe">Profe</option>
        <option value="Cap Departament">Cap Departament</option>
        <option value="Profe/Cap Dept">Profe/Cap Dept</option>
    </select>
    <br>
    <input type="submit" value="Crear">
   
</form>
</body>
</html>