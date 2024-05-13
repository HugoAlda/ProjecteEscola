<?php

require_once 'conexion.php';

try {
    // Si se ha enviado el formulario de filtro de alumnos
    if (isset($_POST['filtre_alumnes'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Nom_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_matricula'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Matricula_alumne ASC;");
        $resultados = $consulta->fetchAll();

    } else if (isset($_POST['filtre_dni_alumne'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY DNI_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_primer_cognom_alumne'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Primer_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_segon_cognom_alumne'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Segon_Cognom_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_telefon_alumne'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Telefon_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if (isset($_POST['filtre_correu_alumne'])) {

        $consulta = $conn->query("SELECT * FROM tbl_alumnes ORDER BY Correu_alumne ASC;");
        $resultados = $consulta->fetchAll();
    
    } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['sexe'])) {
        // Obtén el valor seleccionado del formulario

        $seleccion = $_POST['sexe'];

        // Realiza la consulta dependiendo de la selección
        if ($seleccion == "home") {
            $consulta = $conn->query("SELECT * FROM tbl_alumnes WHERE Sexe_alumne = 'Home';");
        } elseif ($seleccion == "dona") {
            $consulta = $conn->query("SELECT * FROM tbl_alumnes WHERE Sexe_alumne = 'Dona';");
        }

        // Obtiene los resultados de la consulta
        $resultados = $consulta->fetchAll();
    
    } else {
        // Si no se ha enviado ningún formulario, mostrar la tabla sin ordenar
        $consulta = $conn->query("SELECT * FROM tbl_alumnes;");
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
<body>
    <br>
    <div class="contenedor">
        <br>
        <h2 style="text-align: center;">Tabla CRUD tbl_alumnes</h2>
        <div class="create-button">
            <nav>
                <div class="container-fluid">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
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
                    <th><form action="" method="post"><input type="submit" name="filtre_matricula" value="Matricula Alumne"></form></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_dni_alumne" value="DNI Alumne"></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_alumnes" value="Nom Alumne"></form></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_primer_cognom_alumne" value="Primer Cognom Alumne"></form></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_segon_cognom_alumne" value="Segon Cognom Alumne"></form></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_telefon_alumne" value="Telefon Alumne"></form></th>
                    <th><form action="" method="post"><input type="submit" name="filtre_correu_alumne" value="Correu Alumne"></form></th>
                    <th><form action="" method="post"><select name="sexe"><option></option><option name="home">Home</option><option name="dona">Dona</option></select></form></th>
                    <th>Acciones</th>
                    <!-- <input type="submit" name="filtre_sexe_alumne" value="Sexe Alumne"> -->
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
                        echo "<td>" . $columna['Sexe_alumne'] . "</td>";
                        echo "<td>";
                        echo "<a href='formularios/alumne/formeditarAlumne.php?ID=".$columna['Matricula_alumne']."' class='button_e'>Editar</a>";
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