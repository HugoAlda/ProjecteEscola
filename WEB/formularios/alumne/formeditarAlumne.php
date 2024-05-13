<?php
    if (!isset($_GET['ID'])){
        header('Location: ./../../index.php');
        exit();
    } else {
        require_once './../../conexion.php';
        try {
            $ID = $_GET['ID'];
            $stmt = $conn->prepare("SELECT * FROM tbl_alumnes WHERE Matricula_alumne = ?");
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
        <label for="matricula">Matricula alumne</label><br>
        <input type="text" name="matricula" value="<?php echo $ID; ?>" readonly><br><br>
        <label for="nom">Nom</label><br>
        <input type="text" name="Nom_alumne" value="<?php echo $array[1];?>"><br><br>
        <label for="numero">Numero d'alumnes</label><br>
        <input type="text" name="Num_alumne" value="<?php echo $array[2]?>" ><br><br> 
        <label for="tel">Telefon</label>
        <input type="text" name="Telefon_Alumne" value="<?php echo $array[5]?>" ><br><br>
        
        <input type="submit" value="Guardar Cambios" class="button_form">
    </form>
</body>

