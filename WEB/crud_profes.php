<?php

require_once 'conexion.php';

// require_once 'consulta_search.php';

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
            SELECT * 
            FROM tbl_professors
            WHERE DNI_professor LIKE :busqueda 
            OR Nom_professor LIKE :busqueda 
            OR Primer_Cognom_professor LIKE :busqueda 
            OR Segon_Cognom_professor LIKE :busqueda 
            OR Telefon_professor LIKE :busqueda 
            OR Correu_professor LIKE :busqueda 
            OR Sexe_professor LIKE :busqueda 
            OR Cursos_assignats LIKE :busqueda 
            OR Carrec_professor LIKE :busqueda
            OR Tutor_assignat LIKE :busqueda
        ");
        $consulta->execute([':busqueda' => '%' . $busqueda . '%']);
        $resultados = $consulta->fetchAll(); 

        $contador_filtro = $conn->prepare("
            SELECT COUNT(*) 
            FROM tbl_professors
            WHERE DNI_professor LIKE :busqueda 
            OR Nom_professor LIKE :busqueda 
            OR Primer_Cognom_professor LIKE :busqueda 
            OR Segon_Cognom_professor LIKE :busqueda 
            OR Telefon_professor LIKE :busqueda 
            OR Correu_professor LIKE :busqueda 
            OR Sexe_professor LIKE :busqueda 
            OR Cursos_assignats LIKE :busqueda 
            OR Carrec_professor LIKE :busqueda
            OR Tutor_assignat LIKE :busqueda
        ");
        $contador_filtro->execute([':busqueda' => '%' . $busqueda . '%']);
        $total_registros_filtrados = $contador_filtro->fetchColumn();

    } else if (isset($_POST['DNI_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY DNI_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['DNI_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY DNI_professor DESC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['nom_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Nom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['nom_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Nom_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['primer_cognom_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Primer_Cognom_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['primer_cognom_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Primer_Cognom_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['segon_cognom_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Segon_Cognom_professor ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['segon_cognom_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Segon_Cognom_professor DESC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['telefon_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Telefon_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['telefon_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Telefon_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['correu_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Correu_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['correu_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Correu_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['sexe_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Sexe_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['sexe_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Sexe_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['cursos_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Cursos_assignats ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['cursos_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Cursos_assignats DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['carrec_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Carrec_professor ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['carrec_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Carrec_professor DESC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['tutor_asc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Tutor_assignat ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['tutor_desc'])) {

        $consulta = $conn->query("SELECT *
        FROM tbl_professors
        ORDER BY Tutor_assignat DESC;");
        $resultados = $consulta->fetchAll();
    
    } else {
        // Si no se ha enviado ningún formulario, mostrar la tabla sin ordenar
        $consulta = $conn->query("SELECT *
        FROM tbl_professors;");
        $resultados = $consulta->fetchAll();
    }
} catch (PDOException $e) {
    echo "¡Algo falla!<br><br>";
    echo "Error: " . $e->getMessage();
}

// Consultar el total de registros
$consulta_total = $conn->query("SELECT COUNT(*) FROM tbl_professors;");
$registros_totales = $consulta_total->fetchColumn();

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
                        <a class="button_c" href="./crud_profes.php">Eliminar</a>
                    </form>
                </div>
            </nav>
        </div>
        <div class="cambiar-añadir">
            <div class='image-container' id="cruz">
                <a href="./formularios/professor/formcrearProfe.php">
                    <img src='./img/square-plus-solid.png' alt='Imagen Default' class='image image-default'>
                    <img src='./img/square-plus-solid-green.png' alt='Imagen Default' class='image image-hover'>
                </a>
            </div>
            <a class="button_c" href="./crud.php">Cambiar a alumnes</a>
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
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="DNI_asc">DNI<input type="submit" value="⬇" id="flecha_derecha" name="DNI_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="nom_asc">Nom<input type="submit" value="⬇" id="flecha_derecha" name="nom_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="primer_cognom_asc">1r Cognom<input type="submit" value="⬇" id="flecha_derecha" name="primer_cognom_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="segon_cognom_asc">2n Cognom<input type="submit" value="⬇" id="flecha_derecha" name="segon_cognom_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="telefon_asc">Teléfon<input type="submit" value="⬇" id="flecha_derecha" name="telefon_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="correu_asc">Correu<input type="submit" value="⬇" id="flecha_derecha" name="correu_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="sexe_asc">Sexe<input type="submit" value="⬇" id="flecha_derecha" name="sexe_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="cursos_asc">Cursos<input type="submit" value="⬇" id="flecha_derecha" name="cursos_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="carrec_asc">Carrec<input type="submit" value="⬇" id="flecha_derecha" name="carrec_desc"></th>
                <th><input type="submit" value="⬆" id="flecha_izquierda" name="tutor_asc">Tutor<input type="submit" value="⬇" id="flecha_derecha" name="tutor_desc"></th>
                <th>Acciones</th>
            </tr>
        </thead>
    </form>
    <tbody>
        <?php
            foreach ($resultados as $columna){
                echo "<tr>";
                echo "<td data-label='DNI'>" . $columna['DNI_professor'] . "</td>";
                echo "<td data-label='Nom'>" . $columna['Nom_professor'] . "</td>";
                echo "<td data-label='Primer Cognom'>" . $columna['Primer_Cognom_professor'] . "</td>";
                echo "<td data-label='Segon Cognom'>" . $columna['Segon_Cognom_professor'] . "</td>";
                echo "<td data-label='Teléfon'>" . $columna['Telefon_professor'] . "</td>";
                echo "<td data-label='Correu'>" . $columna['Correu_professor'] . "</td>";
                echo "<td data-label='Sexe'>" . $columna['Sexe_professor'] . "</td>";
                echo "<td data-label='Cursos Asignats'>" . $columna['Cursos_assignats'] . "</td>";
                echo "<td data-label='Carrec'>" . $columna['Carrec_professor'] . "</td>";
                echo "<td data-label='Tutor asignat'>" . $columna['Tutor_assignat'] . "</td>";
                echo "<td data-label='Acciones'>";
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