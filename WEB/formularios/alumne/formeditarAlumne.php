<?php
    if (!isset($_GET['ID'])){
        header('Location: ./../../crud.php');
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
    <title>Formulari Editar Alumne</title>
</head>
<body>
    <br>
    <div class="logo">
        <img src="./../../img/logoextendido.png" alt="LOGO">
    </div>
    <div class="titulo">
        <h1>Editar alumne</h1>
    </div>
    <form action="./../../acciones/editar.php" method="post">
        <label for="Matricula_Alumne">Matricula Alumne</label><br>
        <input type="text" id="Matricula_Alumne" name="Matricula_Alumne" value="<?php echo $ID; ?>" readonly> <br><br>
        <label for="DNI_Alumne">DNI Alumne</label><br>
        <input type="text" id="DNI_Alumne" name="DNI_Alumne" value="<?php echo $array[1];?>" placeholder="Introduzca su DNI - 8 Numeros y letra" pattern="[0-9]{8}[A-Za-z]{1}" readonly><br><br>
        <label for="Nom_Alumne">Nom Alumne</label><br>
        <input type="text" id="Nom_Alumne" name="Nom_Alumne" value="<?php echo $array[2]?>"  maxlength="30"required><br><br>
        <label for="Primer_Cognom_Alumne">Primer Cognom Alumne</label><br>
        <input type="text" id="Primer_Cognom_Alumne" name="Primer_Cognom_Alumne" value="<?php echo $array[3]?>" maxlength="60" required><br><br>
        <label for="Segon_Cognom_Alumne">Segon Cognom Alumne</label><br>
        <input type="text" id="Segon_Cognom_Alumne" name="Segon_Cognom_Alumne" value="<?php echo $array[4]?>" maxlength="60" required><br><br>
        <label for="Telefon_Alumne">Telèfon Alumne</label><br>
        <input type="tel" id="Telefon_Alumne" name="Telefon_Alumne" value="<?php echo $array[5]?>" required><br><br>
        <label for="Correu_Alumne">Correu Alumne</label><br>
        <input type="email" id="Correu_Alumne" name="Correu_Alumne" value="<?php echo $array[6]?>" required><br><br>
        <label for="FK_ID_curs">Curs Alumne</label><br>
        <input type="text" id="FK_ID_curs" name="FK_ID_curs" value="<?php echo $array[8]?>" required><br><br>
        <label for="FK_ID_curs">urs</label><br>
        <select id="FK_ID_curs" name="FK_ID_curs" class="selectform" required>
            <option value="3" <?php echo ($array[8] == '3') ? 'selected' : ''; ?>>ASIX/DAW1</option>
            <option value="4" <?php echo ($array[8] == '4') ? 'selected' : ''; ?>>ASIX2</option>
            <option value="5" <?php echo ($array[8] == '5') ? 'selected' : ''; ?>>DAW2</option>
            <option value="1" <?php echo ($array[8] == '1') ? 'selected' : ''; ?>>SMX1</option>
            <option value="2" <?php echo ($array[8] == '2') ? 'selected' : ''; ?>>SMX2</option>
            <option value="6" <?php echo ($array[8] == '6') ? 'selected' : ''; ?>>No es tutor</option>
        </select>
        <br>
        <label for="Sexe_Alumne">Sexe Alumne</label><br>
        <select id="Sexe_Alumne" name="Sexe_Alumne" class="selectform" required>
            <option <?php echo ($array[7] == "Home") ? 'selected' : ''; ?>>Home</option>
            <option <?php echo ($array[7] == "Dona") ? 'selected' : ''; ?>>Dona</option>
            <option <?php echo ($array[7] == "No binari") ? 'selected' : ''; ?>>No binari</option>
        </select>
        <br><br>
        <input type="submit" value="Guardar Cambios" class="button_form">
    </form><br><br>
</body>

