<?php

require_once 'conexion.php';

try {
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['filtre_professors'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs, prof.Curs_assignat, prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_matricula'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_dni_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_primer_cognom_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_segon_cognom_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_telefon_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_correu_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_curs_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else {
        // Si no se ha enviado ningún formulario, mostrar la tabla sin ordenar
        $consulta = $conn->query("SELECT p.DNI_professor, p.Nom_professor, p.Primer_Cognom_professor, p.Segon_Cognom_professor, p.Telefon_professor, p.Correu_professor, p.Sexe_professor, c.Nom_curs, p.Curs_assignat, p.Carrec_professor, FK_Modul_professors
        FROM tbl_professors p
        INNER JOIN tbl_moduls m
        ON p.FK_Modul_professors = m.Nom_modul
        INNER JOIN tbl_curs c 
        ON m.FK_ID_Curs = c.ID_curs;");
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

    <link rel="stylesheet" href="./css/style-profes.css" type="text/css">
    <title>CRUD tbl_professors</title>
</head>
<body class="CRUD">
    <br>
    <div class="contenedor">
        <br>
        <div class="separacambioprofe">
            <h2>Taula CRUD tbl_professors</h2>
            <!-- este es el boton que cambia de ver a alumnos a ver los profesores -->
            <a class="button_c" href="./crud.php">Cambiar a alumnes</a>
        </div>
        <div class="create-button">
        <!-- aqui cierra el div para separar el titulo de cambiar a profe -->
            <nav>
                <!-- barra de navegacion es donde está lot titulos de las columnas -->
                <div class="container">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar">
                        <button class="button_e" type="submit">Buscar</button>
                        <a class="button_c" href="formularios/professor/formcrearprofe.php">Crear</a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <table>
            <thead class="thead">
                <tr>
                    <th>DNI</th>
                    <th>Nom</th>
                    <th>Primer Cognom</th>
                    <th>Segon Cognom</th>
                    <th>Teléfon</th>
                    <th>Correu</th>
                    <th>Tutor</th>
                    <th>Curs Asignat</th>
                    <th>Carrec</th>
                    <th>Sexe</th>
                    <th>Moduls Professors</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($resultados as $posicion => $columna){
                        echo "<tr>";
                        echo "<td>" . $columna['DNI_professor'] . "</td>";
                        echo "<td>" . $columna['Nom_professor'] . "</td>";
                        echo "<td>" . $columna['Primer_Cognom_professor'] . "</td>";
                        echo "<td>" . $columna['Segon_Cognom_professor'] . "</td>";
                        echo "<td>" . $columna['Telefon_professor'] . "</td>";
                        echo "<td>" . $columna['Correu_professor'] . "</td>";
                        echo "<td>" . $columna['Nom_curs'] . "</td>";
                        echo "<td>" . $columna['Curs_assignat'] . "</td>";
                        echo "<td>" . $columna['Carrec_professor'] . "</td>";
                        echo "<td>" . $columna['Sexe_professor'] . "</td>";
                        echo "<td>" . $columna['FK_Modul_professors'] . "</td>";
                        echo "<td>";
                        echo "<a href='./formularios/professor/formeditarProfe.php?DNI=".$columna['DNI_professor']."' class='button_e'><img src='./img/pen-to-square-solid.png'></a>";

                        echo "<a href='./acciones/eliminarProfe.php?DNI=".$columna['DNI_professor']."' class='button_b'><img src='./img/dumpster-solid.png'></a>";
                        echo "</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>