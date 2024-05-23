<?php
require_once './../conexion.php';
$Matricula=$_POST['Matricula_Alumne'];
$DNI = $_POST['DNI_Alumne'];
$nombre = $_POST['Nom_Alumne'];
$primer_cognom=$_POST['Primer_Cognom_Alumne'];
$Segon_cognom=$_POST['Segon_Cognom_Alumne'];
$tel=$_POST['Telefon_Alumne'];
$correu=$_POST['Correu_Alumne'];
$sexe=$_POST['Sexe_Alumne'];
$FK=$_POST['FK_ID_Curs'];
try {
    // Asegurarse de que la conexión a la base de datos se haya establecido correctamente
    if ($conn === null) {
        throw new PDOException("Conexión a la base de datos no establecida.");
    }

    $conn->beginTransaction();

    // Usar nombres de columnas y variables consistentes
    $stmt = $conn->prepare("INSERT INTO tbl_alumnes (Matricula_alumne,DNI_alumne,Nom_alumne,Primer_Cognom_alumne,Segon_Cognom_alumne,Telefon_alumne,Correu_alumne,Sexe_alumne,FK_ID_curs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? )");
    $stmt->execute([$Matricula,$DNI,$nombre,$primer_cognom,$Segon_cognom,$tel,$correu,$sexe,$FK]);

    $conn->commit();

    header('Location: ../crud.php');
    exit();
} catch(PDOException $e) {
    $conn->rollBack();
    echo "Error en la transacción: " . $e->getMessage();
}

// Liberar recursos
$stmt = null;
$conn = null;
?>
