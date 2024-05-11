<?php

    require_once 'conexion.php';
    
    try{
    
        $consulta = $conn->query("SELECT * FROM tbl_alumnes;");
    
        $resultados = $consulta->fetchAll();

    }catch (PDOException $e){
        echo "¡Algo falla!<br><br>";
        echo "Error: " . $e->getMessage();
    }

?>

<head>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>CRUD tbl_alumnes</title>
</head>
<body>
    <div class="container">
        <br>
        <h2 style="text-align: center;">Tabla CRUD tbl_alumnes</h2>
        <div class="create-button">
            <a class="button" href="insertar.php">Crear</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Matricula Alumne</th>
                    <th>DNI Alumne</th>
                    <th>Nom Alumne</th>
                    <th>Primer Cognom Alumne</th>
                    <th>Segon Cognom Alumne</th>
                    <th>Telefon Alumne</th>
                    <th>Correu Alumne</th>
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
                    echo "<td>" . $columna['Sexe_alumne'] . "</td>";
                    echo "<td>";
                    echo "<a href='editar.php?ID=".$columna['Matricula_alumne']."' class='button_e'>Editar</a>";
                    echo "<form action='borrar.php' method='post' style='display:inline;'>";
                    echo "<input type='hidden' name='id' value='".$columna['Matricula_alumne']."'>";
                    echo "<br> <br>";
                    echo "<input type='submit' name='btn_eliminar' value='Borrar' class='button_b'>";
                    echo "</form>";
                    echo "</td>";
                    echo "<tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>