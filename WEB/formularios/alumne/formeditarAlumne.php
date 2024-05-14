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
    
    <form action="./../../acciones/crear.php" method="post">
        <div class="formuuu">
            <label for="Matricula_Alumne">Matricula Alumne</label><br>
            <input type="text" id="Matricula_Alumne" name="Matricula_Alumne" value="<?php echo $ID; ?>" readonly> <br><br>
            <label for="DNI_Alumne">DNI</label><br>
            <input type="text" id="DNI_Alumne" name="DNI_Alumne" value="<?php echo $array[1];?>"><br><br>
            <label for="Nom_Alumne">Nom Alumne</label><br>
            <input type="text" id="Nom_Alumne" name="Nom_Alumne" value="<?php echo $array[2]?>" ><br><br>
            <label for="Primer_Cognom_Alumne">Primer Cognom Alumne</label><br>
            <input type="text" id="Primer_Cognom_Alumne" name="Primer_Cognom_Alumne" value="<?php echo $array[3]?>" ><br><br>
            <label for="Segon_Cognom_Alumne">Segon Cognom Alumne</label><br>
            <input type="text" id="Segon_Cognom_Alumne" name="Segon_Cognom_Alumne" value="<?php echo $array[4]?>" ><br><br>
            <label for="Telefon_Alumne">Telèfon Alumne</label><br>
            <input type="tel" id="Telefon_Alumne" name="Telefon_Alumne" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" value="<?php echo $array[5]?>" ><br><br>
            <label for="Correu_Alumne">Correu Alumne</label><br>
            <input type="email" id="Correu_Alumne" name="Correu_Alumne" value="<?php echo $array[6]?>" ><br><br>
            <label for="Sexe_Alumne">Sexe Alumne</label><br>
            <select id="Sexe_Alumne" name="Sexe_Alumne" class="selectform" required>
                <option value="Home">Home</option>
                <option value="Dona">Dona</option>
                <option value="No binari">No binari</option>
            </select>
            <br>
        </div>
        <input type="submit" value="Guardar Cambios" class="button_form">
    </form>
</body>

