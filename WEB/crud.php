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
    <title>CRUD tbl_alumnes</title>
</head>
<body class="CRUD">
    <br>
    <div class="contenedor">
        <br>
        <h2>Tabla CRUD tbl_alumnes</h2>
        <div class="create-button">
            <nav>
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Matricula">
                        <input class="form-control me-2" type="search" placeholder="DNI">
                        <input class="form-control me-2" type="search" placeholder="Nom">
                        <input class="form-control me-2" type="search" placeholder="1er Cognom">
                        <input class="form-control me-2" type="search" placeholder="2gn Cognom">
                        <input class="form-control me-2" type="search" placeholder="Teléfon">
                        <input class="form-control me-2" type="search" placeholder="Correu">
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
                    <th><form method="post"><input type="submit" name="filtre_telefon_alumne" value="Teléfon Alumne"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_correu_alumne" value="Correu Alumne"></form></th>
                    <th><form method="post"><input type="submit" name="filtre_curs_alumne" value="Curs"></form></th>
                    <th>Sexe Alumne</th>
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
                        echo "<a href='formularios/alumne/formeditarAlumne.php?ID=".$columna['Matricula_alumne']."' class='button_e'> Editar</a>";
                        echo "<br><br>";
                        echo "<a href='acciones/eliminar.php?ID=".$columna['Matricula_alumne']."' class='button_b'>Borrar</a>";
                        echo "</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>