<?php

require_once 'conexion.php';

// require_once 'consulta_search.php';

try {
    // Inicializa la variable $resultados para evitar errores de advertencia
    $resultados = [];

    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['filtre_professors'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs, prof.Cursos_assignat, prof.Carrec_professor 
        FROM tbl_professors prof
        INNER JOIN tbl_curs c 
        ON prof.FK_ID_curs = c.ID_curs 
        ORDER BY prof.Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_matricula'])) {

        $consulta = $conn->query("SELECT prof.DNI_professor, prof.Nom_professor,prof.DNI_professor, prof.Primer_Cognom_professor, prof.Segon_Cognom_professor, prof.Telefon_professor, prof.Correu_professor, prof.Sexe_professor, c.ID_curs,prof.Cursos_assignat,prof.Carrec_professor 
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
        $consulta = $conn->query("SELECT *
        FROM tbl_professors ;");
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

    <title>CRUD PROFESSORS</title>
</head>
<header>
    <img src="./img/logoextendido.png" alt="">
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
                        <button class="btn btn-outline-success" type="submit" id="registros" name="vuelta_registros">Registos</button>
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
            <a class="button_c" href="./crud.php">Cambiar a alumnes</a>
            <br><br>
            <h3>Total de registros: <?php echo $registros_totales;?></h3>
        </div>
    </div>       
    <div class="container">
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
                    <th>Sexe</th>
                    <th>Cursos Asignats</th>
                    <th>Carrec</th>
                    <th>Tutor asignat</th>
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
                        echo "<td>" . $columna['Sexe_professor'] . "</td>";
                        echo "<td>" . $columna['Cursos_assignats'] . "</td>";
                        echo "<td>" . $columna['Carrec_professor'] . "</td>";
                        echo "<td>" . $columna['Tutor_assignat'] . "</td>";
                        echo "<td>";
                        echo "<a href='./formularios/professor/formeditarProfe.php?DNI=".$columna['DNI_professor']."' class='button_e'>";
                                echo "<div class='image-container'>";
                                    echo "<img src='./img/pen-to-square-solid.png' alt='Imagen Default' class='image image-default'>";
                                    echo "<img src='./img/pen-to-square-solid-blue.png' alt='Imagen Hover' class='image image-hover'>";
                                echo "</div>";
                            echo "</a>";
                            echo "<a href='./acciones/eliminarProfe.php?DNI=".$columna['DNI_professor']."' class='button_b'>";
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