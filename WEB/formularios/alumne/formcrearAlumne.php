<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Registro</title>
    
    <link rel="stylesheet" href="./../../css/style.css">
    <script src="./../../scripts/Validaciones.js"></script>
</head>
<body class="CRUD">
    <header>
        <div class="logo">
            <!-- <img src="./../../img/logoextendido.png" alt="LOGO"> -->
        </div>
        <div class="titulo">
        <!-- <h1>Nou alumne</h1> -->
        </div>
    </header>
    
        
    
<form action="./../../acciones/crear.php" method="post">
    <div class="formuuu">
        <label for="Matricula_Alumne">Matricula Alumne</label>
        <br>
        <input onmouseleave="validaMatricula()" type="number" id="Matricula_Alumne" name="Matricula_Alumne" maxlength="9" placeholder="9 caracteres" required>
        <p class="errors" id="error_matricula"></p>
        <br>
        <label for="DNI_Alumne" >DNI</label>
        <br>
        <input onmouseleave="validaDNI()" type="text" id="DNI_Alumne" name="DNI_Alumne" placeholder="Introducir DNI - 8 Numeros y letra" pattern="[0-9]{8}[A-Za-z]{1}" required>
        <p class="errors" id="error_dni"></p>
        <br>
        <label for="Nom_Alumne">Nom Alumne</label>
        <br>
        <input onmouseleave="validaNombre()" type="text" id="Nom_Alumne" name="Nom_Alumne" maxlength="30" required>
        <p class="errors" id="error_nom"></p>
        <br>
        <label for="Primer_Cognom_Alumne">Primer Cognom Alumne</label>
        <br>
        <input onmouseleave="validaApellido1()" type="text" id="Primer_Cognom_Alumne" name="Primer_Cognom_Alumne" maxlength="60" required>
        <p class="errors" id="error_cognom1"></p>
        <br>
        <label for="Segon_Cognom_Alumne">Segon Cognom Alumne</label>
        <br>
        <input onmouseleave="validaApellido2()" type="text" id="Segon_Cognom_Alumne" name="Segon_Cognom_Alumne"  maxlength="60" required>
        <p class="errors" id="error_cognom2"></p>
        <br>
        <label for="Telefon_Alumne">Telèfon Alumne</label>
        <br>
        <input onmouseleave="validaTelf()" type="tel" id="Telefon_Alumne" name="Telefon_Alumne" placeholder="Introducir telefono 9 Numeros" maxlength="9" required>
        <p class="errors" id="error_telf"></p>
        <br>
        <label for="Correu_Alumne">Correu Alumne</label>
        <br>
        <input onmouseleave="validaEmail()" type="email" id="Correu_Alumne" name="Correu_Alumne" required>
        <p class="errors" id="error_email"></p>
        <br>
        <label for="Sexe_Alumne">Sexe Alumne</label>
        <br>
        <select onmouseleave="validaOpcionesSexo()" id="Sexe_Alumne" name="Sexe_Alumne" class="selectform" required>
            <option value="">Selecciona una opció</option>
            <option value="Home">Home</option>
            <option value="Dona">Dona</option>
            <option value="No binari">No binari</option>
        </select>
        <p class="errors" id="error_opcion_sexo"></p>
        <br>
        <label for="FK_ID_Curs">Curs</label>
        <br>
        <select onmouseleave="validaOpcionesCurso()" id="FK_ID_Curs" name="FK_ID_Curs" class="selectform" required>
            <option value="">Selecciona una opció</option>
            <option value="1">SMX1</option>
            <option value="2">SMX2</option>
            <option value="3">ASIX1/DAW1</option>
            <option value="4">ASIX2</option>
            <option value="5">DAW2</option>
        </select>
        <p class="errors" id="error_opcion_curso"></p>
    </div>
<input type="submit" value="Crear" class="button_form">
</form>
</body>
</html>