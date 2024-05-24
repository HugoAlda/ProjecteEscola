<?php

require_once 'conexion.php';

try {
    
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];
    
    // Variable para almacenar la consulta
    $consulta = null;

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_GET['query'])) {
        $busqueda = $_GET['query'];
        // Prepara la consulta SQL para la búsqueda
        $consulta = $conn->prepare("
            SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
            FROM tbl_alumnes alu 
            INNER JOIN tbl_curs c 
            ON alu.FK_ID_curs = c.ID_curs 
            WHERE alu.Matricula_alumne LIKE :busqueda 
            OR alu.DNI_alumne LIKE :busqueda 
            OR alu.Nom_alumne LIKE :busqueda 
            OR alu.Primer_Cognom_alumne LIKE :busqueda 
            OR alu.Segon_Cognom_alumne LIKE :busqueda 
            OR alu.Telefon_alumne LIKE :busqueda 
            OR alu.Correu_alumne LIKE :busqueda 
            OR alu.Sexe_alumne LIKE :busqueda 
            OR c.Nom_curs LIKE :busqueda
            ORDER BY alu.Matricula_alumne ASC;
        ");
        $consulta->execute([':busqueda' => '%' . $busqueda . '%']);
        $resultados = $consulta->fetchAll(); 

        $contador_filtro = $conn->prepare("
            SELECT COUNT(*) 
            FROM tbl_alumnes alu 
            INNER JOIN tbl_curs c 
            ON alu.FK_ID_curs = c.ID_curs 
            WHERE alu.Matricula_alumne LIKE :busqueda 
            OR alu.DNI_alumne LIKE :busqueda 
            OR alu.Nom_alumne LIKE :busqueda 
            OR alu.Primer_Cognom_alumne LIKE :busqueda 
            OR alu.Segon_Cognom_alumne LIKE :busqueda 
            OR alu.Telefon_alumne LIKE :busqueda 
            OR alu.Correu_alumne LIKE :busqueda 
            OR alu.Sexe_alumne LIKE :busqueda 
            OR c.Nom_curs LIKE :busqueda;
        ");
        $contador_filtro->execute([':busqueda' => '%' . $busqueda . '%']);
        $total_registros_filtrados = $contador_filtro->fetchColumn();   

    }else if (isset($_POST['Matricula_asc'])) {

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

// Consultar el total de registros
$consulta_total = $conn->query("SELECT COUNT(*) FROM tbl_alumnes");
$registros_totales = $consulta_total->fetchColumn();

?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>CRUD ALUMNES</title>
</head>
<header>
    <img src="./img/logoextendido.png">
</header>
<body class="CRUD">
    <br><br><br><br>
    <div class="contenedor">
        <br>
        <div class="create-button">
            <nav>
                <div>
                    <form class="d-flex" role="search" method="GET" action="">
                        <input class="form-control me-2" type="search" name="query" placeholder="Buscar" aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                        <a class="button_c" href="./crud.php">Registros</a>
                    </form>
                </div>
            </nav>

        </div>
        <div class="cambiar-añadir">
            <div class='image-container' id="cruz">
                <a href="./formularios/alumne/formcrearAlumne.php">
                    <img src='./img/square-plus-solid.png' alt='Imagen Default' class='image image-default'>
                    <img src='./img/square-plus-solid-green.png' alt='Imagen Default' class='image image-hover'>
                </a>
            </div>
            <a class="button_c" href="./crud_profes.php">Cambiar a professors</a>
            <br><br>
            <?php

                if (isset($_GET['query'])) {
                    echo "<h3>Total de registros: $total_registros_filtrados</h3>";
                } else {
                    echo "<h3>Total de registros:  $registros_totales</h3>";
                }

            ?>
        </div>
    </div>
    <div class="container">
        <table>
            <form action="" method="post">
                <thead class="thead">
                    <tr>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Matricula_asc">Matricula<input type="submit" value="⬇" id="flecha_derecha" name="Matricula_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="DNI_asc">DNI<input type="submit" value="⬇" id="flecha_derecha" name="DNI_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Nom_alumnes_asc">Nom<input type="submit" value="⬇" id="flecha_derecha" name="Nom_alumnes_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Primer_cognom_alumne_asc">Primer Cognom<input type="submit" value="⬇" id="flecha_derecha" name="Primer_cognom_alumne_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Segon_cognom_alumne_asc">Segon Cognom<input type="submit" value="⬇" id="flecha_derecha" name="Segon_cognom_alumne_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Telefon_alumne_asc">Teléfon<input type="submit" value="⬇" id="flecha_derecha" name="Telefon_alumne_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Correu_alumne_asc">Correu<input type="submit" value="⬇" id="flecha_derecha" name="Correu_alumne_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Curs_alumne_asc">Curs<input type="submit" value="⬇" id="flecha_derecha" name="Curs_alumne_desc"></th>
                        <th><input type="submit" value="⬆" id="flecha_izquierda" name="Sexe_alumne_asc">Sexe<input type="submit" value="⬇" id="flecha_derecha" name="Sexe_alumne_desc"></th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </form>
            <tbody>
                <?php
                    foreach ($resultados as $columna) {
                        echo "<tr>";
                            echo "<td data-label='Matricula'>" . $columna['Matricula_alumne'] . "</td>";
                            echo "<td data-label='DNI'>" . $columna['DNI_alumne'] . "</td>";
                            echo "<td data-label='Nom'>" . $columna['Nom_alumne'] . "</td>";
                            echo "<td data-label='Primer Cognom'>" . $columna['Primer_Cognom_alumne'] . "</td>";
                            echo "<td data-label='Segon Cognom'>" . $columna['Segon_Cognom_alumne'] . "</td>";
                            echo "<td data-label='Teléfon'>" . $columna['Telefon_alumne'] . "</td>";
                            echo "<td data-label='Correu'>" . $columna['Correu_alumne'] . "</td>";
                            echo "<td data-label='Curs'>" . $columna['Nom_curs'] . "</td>";
                            echo "<td data-label='Sexe'>" . $columna['Sexe_alumne'] . "</td>";
                            echo "<td data-label='Acciones'>";
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
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
