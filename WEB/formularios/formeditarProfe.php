<?php
    if (!isset($_GET['ID'])){
        header('Location: ./../../index.php');
        exit();
    } else {
        require_once './../../conexion.php';
        try {
            $ID = $_GET['ID'];
            $stmt = $conn->prepare("SELECT * FROM tbl_profes WHERE DNI = ?");
            $stmt->bindParam(1, $ID);
            $stmt->execute();
            $datos_escuela = $stmt->fetchAll();
            $array=array();
            foreach($datos_escuela as $clave => $valor){
                $array=$valor;
            }
        } catch (PDOException $e) {
            echo "Error al obtener datos de la base de datos: " . $e->getMessage();
        }
    }
?>
<head>
    <meta charset="UTF-8">    
    <link rel="stylesheet" href="./../../css/csseditar_crear.css">
    <link rel="stylesheet" href="./../../css/style.css">
</head>
<body>
    <br>
    <div class="logo">
        <img src="./../../img/logoextendido.png" alt="LOGO">
    </div>
    <div class="titulo">
        <h1>Editar</h1>
    </div>
    <form action="../acciones/editar.php" method="POST">
        <label for="nombre">DNI Professor</label><br>
        <input type="text" name="ID" value="<?php echo $ID; ?>" readonly><br><br>
        <label for="nombre">Nom</label><br>
        <input type="text" name="Nombre_Escuela" value="<?php echo $array[1];?>"><br><br>
        <label for="numero">Numero de professors</label><br>
        <input type="text" name="Nom_alumne" value="<?php echo $array[2]?>" ><br><br>        
        <input type="submit" value="Guardar Cambios" class="button_form">
    </form>
</body>
