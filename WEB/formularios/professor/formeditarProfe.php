

<?php
if (!isset($_GET['DNI'])){
    header('Location: ./../../crud_profes.php');
    exit();
} else {
    require_once './../../conexion.php';
    try {
        $DNI = $_GET['DNI'];
        $stmt = $conn->prepare("SELECT * FROM tbl_professors WHERE DNI_professor = ?");
        $stmt->bindParam(1, $DNI);
        $stmt->execute();
        $datos_escuela = $stmt->fetchAll();
        $array = array();
        foreach($datos_escuela as $clave => $valor){
            $array = $valor;
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
    <title>Formulari Editar Professor</title>
</head>
<body>
    <br>
    <div class="logo">
        <img src="./../../img/logoextendido.png" alt="LOGO">
    </div>
    <div class="titulo">
        <h1>Editar</h1>
    </div>
    <form action="./../../acciones/editarProfe.php" method="POST">
        <label for="DNI_Professor">DNI</label><br>
        <input type="text" id="DNI_Professor" name="DNI_Professor" value="<?php echo $array[0]; ?>" readonly> <br><br>
        <label for="Nom_Professor">Nom Professor</label><br>
        <input type="text" id="Nom_Professor" name="Nom_Professor" value="<?php echo $array[1];?>" required><br><br>
        <label for="Primer_Cognom_Professor">Primer Cognom Professor</label><br>
        <input type="text" id="Primer_Cognom_Professor" name="Primer_Cognom_Professor" value="<?php echo $array[2];?>" required><br><br>
        <label for="Segon_Cognom_Professor">Segon Cognom Professor</label><br>
        <input type="text" id="Segon_Cognom_Professor" name="Segon_Cognom_Professor" value="<?php echo $array[3];?>" required><br><br>
        <label for="Telefon_Professor">Telèfon Professor</label><br>
        <input type="tel" id="Telefon_Professor" name="Telefon_Professor" value="<?php echo $array[4];?>" required><br><br>
        <label for="Correu_Professor">Correu Professor</label><br>
        <input type="email" id="Correu_Professor" name="Correu_Professor" value="<?php echo $array[5];?>" required><br><br>
        <label for="Sexe_Professor">Sexe Professor</label><br>
        <select id="Sexe_Professor" name="Sexe_Professor" class="selectform" required>
            <option value="Home" <?php echo ($array[6] == 'Home') ? 'selected' : ''; ?>>Home</option>
            <option value="Dona" <?php echo ($array[6] == 'Dona') ? 'selected' : ''; ?>>Dona</option>
            <option value="No binari" <?php echo ($array[6] == 'No binari') ? 'selected' : ''; ?>>No binari</option>
        </select>
        <br><br>
        <label for="Assignacio_Tutor">Assignació Tutor</label><br>
        <select id="Assignacio_Tutor" name="Assignacio_Tutor" class="selectform" required>
            <option value="3" <?php echo ($array[7] == '3') ? 'selected' : ''; ?>>ASIX/DAW1</option>
            <option value="4" <?php echo ($array[7] == '4') ? 'selected' : ''; ?>>ASIX2</option>
            <option value="5" <?php echo ($array[7] == '5') ? 'selected' : ''; ?>>DAW2</option>
            <option value="1" <?php echo ($array[7] == '1') ? 'selected' : ''; ?>>SMX1</option>
            <option value="2" <?php echo ($array[7] == '2') ? 'selected' : ''; ?>>SMX2</option>
            <option value="6" <?php echo ($array[7] == '6') ? 'selected' : ''; ?>>No es tutor</option>
        </select>
        <br><br>
        <label for="Curs_Assignat">Curs Assignat</label><br>
        <input type="text" id="Curs_Assignat" name="Curs_Assignat" value="<?php echo $array[8]?>"><br><br>
        <label for="Carrec_Professor">Carrec Professor</label><br>
        <select id="Carrec_Professor" name="Carrec_Professor" class="selectform" required>
            <option value="Profe" <?php echo ($array[9] == 'Profe') ? 'selected' : ''; ?>>Profe</option>
            <option value="Cap Departament" <?php echo ($array[9] == 'Cap Departament') ? 'selected' : ''; ?>>Cap Departament</option>
            <option value="Profe/Cap Dept" <?php echo ($array[9] == 'Profe/Cap Dept') ? 'selected' : ''; ?>>Profe/Cap Dept</option>
        </select>
        <br><br>
        <label for="">uno mas</label>
        <select id="Modul_Professor" name="Modul_Professor" class="selectform" required>
            <option value="1" >ASIX/DAW1</option>
           <!-- segui aqui mañana -->
        </select>
        <input type="submit" value="Guardar Cambios" class="button_form">
    </form><br><br>
</body>
