<?php

require_once 'conexion.php';

try {
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['filtre_alumnes'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_matricula'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Matricula_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_dni_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.DNI_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_primer_cognom_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Primer_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_segon_cognom_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Segon_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_telefon_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Telefon_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_correu_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Correu_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_curs_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY c.ID_curs ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_sexe_alumne'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Sexe_alumne ASC;");
        $resultados = $consulta->fetchAll();
    } else {
        // Si no se ha enviado ningún formulario, mostrar la tabla sin ordenar
        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Matricula_alumne ASC;");
        $resultados = $consulta->fetchAll();
    }
} catch (PDOException $e) {
    echo "¡Algo falla!<br><br>";
    echo "Error: " . $e->getMessage();
}
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>CRUD ALUMNES</title>
</head>
<body class="CRUD">
    <br>
    <div class="contenedor">
        <br>
        <div class="separacambioprofe">
            <h2>CRUD ALUMNES</h2>
            <!-- este es el boton que cambia de ver a alumnos a ver los profesores -->
            <a class="button_c" href="./crud_profes.php">Cambiar a professors</a>
        </div>
        <div class="create-button">
        <!-- aqui cierra el div para separar el titulo de cambiar a profe -->
                <nav>
                <!-- barra de navegacion es donde está lot titulos de las columnas -->
                <div class="container">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar">
                        <button class="button_e" type="submit">Buscar</button>
                        <a class="button_c" href="formularios/alumne/formcrearAlumne.php">Crear</a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <table>
            <thead class="thead">
                <tr>
                    <th>Matricula</th>
                    <th>DNI</th>
                    <th>Nom</th>
                    <th>Primer Cognom</th>
                    <th>Segon Cognom</th>
                    <th>Teléfon</th>
                    <th>Correu</th>
                    <th>Curs</th>
                    <th>Sexe</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($resultados as $posicion => $columna){
                        echo "<tr>";
                        echo "<td>" . $columna['Matricula_alumne'] . "</td>";
                        echo "<td>" . $columna['DNI_alumne'] . "</td>";
                        echo "<td>" . $columna['Nom_alumne'] . "</td>";
                        echo "<td>" . $columna['Primer_Cognom_alumne'] . "</td>";
                        echo "<td>" . $columna['Segon_Cognom_alumne'] . "</td>";
                        echo "<td>" . $columna['Telefon_alumne'] . "</td>";
                        echo "<td>" . $columna['Correu_alumne'] . "</td>";
                        echo "<td>" . $columna['Nom_curs'] . "</td>";
                        echo "<td>" . $columna['Sexe_alumne'] . "</td>";
                        echo "<td>";
                        echo "<a href='formularios/alumne/formeditarAlumne.php?ID=".$columna['Matricula_alumne']."' class='button_e'><img src='./img/pen-to-square-solid.png'></a>";
                        echo "<a href='acciones/eliminar.php?ID=".$columna['Matricula_alumne']."' class='button_b'><img src='./img/dumpster-solid.png'></a>";
                        echo "</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>