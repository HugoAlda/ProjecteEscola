<?php

require_once 'conexion.php';

try {
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['Matricula_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Matricula_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['Matricula_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Matricula_alumne DESC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['Nom_alumnes_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['Nom_alumnes_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Nom_alumne DESC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['DNI_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.DNI_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['DNI_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.DNI_alumne DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Primer_cognom_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Primer_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Primer_cognom_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Primer_Cognom_alumne DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Segon_cognom_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Segon_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Segon_cognom_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Segon_Cognom_alumne DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Telefon_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Telefon_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Telefon_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Telefon_alumne DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Correu_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Correu_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Correu_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Correu_alumne DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Curs_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY c.ID_curs ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Curs_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY c.ID_curs DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['Sexe_alumne_asc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Sexe_alumne ASC;");
        $resultados = $consulta->fetchAll();
    } else if (isset($_POST['Sexe_alumne_desc'])) {

        $consulta = $conn->query("SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
        FROM tbl_alumnes alu 
        INNER JOIN tbl_curs c 
        ON alu.FK_ID_curs = c.ID_curs 
        ORDER BY alu.Sexe_alumne DESC;");
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
<header>
    <img src="./img/logoextendido.png" alt="">
</header>
<body class="CRUD">
    <br>
    <div class="contenedor">
        <br>
        <div class="separacambioprofe">
            <h2>CRUD ALUMNES</h2>
            <a class="button_c" href="./crud_profes.php">Cambiar a professors</a>
        </div>
        <div class="create-button">
                <nav>
                <div>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        <a class="button_c" href="formularios/alumne/formcrearAlumne.php">Crear</a>
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <div class="container">
        <table>
            <form action="" method="post">
                <thead class="thead">
                    <tr>
                        <th><input type="submit" value="⬆" name="Matricula_asc">Matricula<input type="submit" value="⬇" name="Matricula_desc"></th>
                        <th><input type="submit" value="⬆" name="DNI_asc">DNI<input type="submit" value="⬇" name="DNI_desc"></th>
                        <th><input type="submit" value="⬆" name="Nom_alumnes_asc">Nom<input type="submit" value="⬇" name="Nom_alumnes_desc"></th>
                        <th><input type="submit" value="⬆" name="Primer_cognom_alumne_asc">Primer Cognom<input type="submit" value="⬇" name="Primer_cognom_alumne_desc"></th>
                        <th><input type="submit" value="⬆" name="Segon_cognom_alumne_asc">Segon Cognom<input type="submit" value="⬇" name="Segon_cognom_alumne_desc"></th>
                        <th><input type="submit" value="⬆" name="Telefon_alumne_asc">Teléfon<input type="submit" value="⬇" name="Telefon_alumne_desc"></th>
                        <th><input type="submit" value="⬆" name="Correu_alumne_asc">Correu<input type="submit" value="⬇" name="Correu_alumne_desc"></th>
                        <th><input type="submit" value="⬆" name="Curs_alumne_asc">Curs<input type="submit" value="⬇" name="Curs_alumne_desc"></th>
                        <th><input type="submit" value="⬆" name="Sexe_alumne_asc">Sexe<input type="submit" value="⬇" name="Sexe_alumne_desc"></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <?php
                    foreach ($resultados as $posicion => $columna) {
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
                            echo "<a href='formularios/alumne/formeditarAlumne.php?ID=" . $columna['Matricula_alumne'] . "' class='button_e'>";
                                echo "<div class='image-container'>";
                                    echo "<img src='./img/pen-to-square-solid.png' alt='Imagen Default' class='image image-default'>";
                                    echo "<img src='./img/pen-to-square-solid-blue.png' alt='Imagen Hover' class='image image-hover'>";
                                echo "</div>";
                            echo "</a>";
                            echo "<a href='acciones/eliminar.php?ID=" . $columna['Matricula_alumne'] . "' class='button_b'>";
                                echo "<div class='image-container'>";
                                    echo "<img src='./img/dumpster-solid.png' alt='Imagen Default' class='image image-default'>";
                                    echo "<img src='./img/dumpster-solid-red.png' alt='Imagen Hover' class='image image-hover'>";
                                echo "</div>";
                            echo "</a>";
                            echo "</td>";
                        echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>