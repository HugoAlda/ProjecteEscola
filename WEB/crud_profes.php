<?php

require_once 'conexion.php';

try {
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['filtre_professors'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs, prof.Curs_assignat, prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_matricula'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_dni_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_primer_cognom_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_segon_cognom_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_telefon_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    } else if (isset($_POST['filtre_correu_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    } else if (isset($_POST['filtre_curs_alumne'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else {
        // Si no se ha enviado ningún formulario, mostrar la tabla sin ordenar
        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.FK_ID_curs,prof.Curs_assignat,prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_alumne ASC;");
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
                        <input class="form-control me-2" type="search" placeholder="Matricula">
                        <input class="form-control me-2" type="search" placeholder="DNI">
                        <input class="form-control me-2" type="search" placeholder="Nom">
                        <input class="form-control me-2" type="search" placeholder="1er Cognom">
                        <input class="form-control me-2" type="search" placeholder="2gn Cognom">
                        <input class="form-control me-2" type="search" placeholder="Teléfon">
                        <input class="form-control me-2" type="search" placeholder="Correu">
                        <input class="form-control me-2" type="search" placeholder="Curs">
                        <input class="form-control me-2" type="search" placeholder="Sexe">
                        <button class="button_e" type="submit">Search</button>
                        <p class="texto-invisible">1</p>
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
                    <th><form method="post"><input type="submit" name="filtre_matricula" value="Matricula Alumne"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_dni_alumne" value="DNI Alumne"></th>
                    <th><form method="post"><input type="submit" name="filtre_alumnes" value="Nom Alumne"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_primer_cognom_alumne" value="Primer Cognom"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_segon_cognom_alumne" value="Segon Cognom"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_telefon_alumne" value="Teléfon professor"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_correu_professor" value="Correu professor"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_curs_professor" value="Curs"></form></th>
                    <th>Sexe professor</th>
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
                        echo "<td>" . $columna['Coreu_professor'] . "</td>";
                        echo "<td>" . $columna['Sexe_professor'] . "</td>";
                        echo "<td>" . $columna['FK_ID_curs'] . "</td>";
                        echo "<td>" . $columna['Curs_assignat'] . "</td>";
                        echo "<td>" . $columna['Carrec_professor'] . "</td>";
                        echo "<td>";
                        echo "<a href='formularios/professor/formeditarProfe.php?DNI=".$columna['DNI_professor']."' class='button_e'> Editar</a>";
                        echo "<br>";
                        echo "<a href='acciones/eliminar.php?DNI=".$columna['DNI_professor']."' class='button_b'>Borrar</a>";
                        echo "</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>