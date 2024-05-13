<?php
    if (!isset($_GET['ID_escuela'])){
        header('Location: ../index.php');
        exit();
    } else {
        require_once '../conexion.php';
        try {
            $ID = $_GET['ID_escuela'];
            $stmt = $conexion->prepare("SELECT * FROM Escuelas WHERE ID_escuela = ?");
            $stmt->bindParam(1, $ID);
            $stmt->execute();
            $datos_escuela = $stmt->fetchAll();
            $array=array();
            foreach($datos_escuela as $clave => $valor){
                $array=$valor;
            }
        } catch (PDOException $e) {
            echo "Error al obtener datos de la escuela: " . $e->getMessage();
        }
    }
?>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="../acciones/editar.php" method="POST">
        <label for="nombre">ID:</label>
        <input name="ID_escuela" value="<?php echo $ID; ?>" readonly><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="Nombre_Escuela" value="<?php echo $array[1];?>"><br><br>
        <label for="numero">Numero de alumnos:</label>
        <input type="text" name="Num_alumn" value="<?php echo $array[2]?>" ><br><br>        
        <input type="submit" value="Guardar Cambios">
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
