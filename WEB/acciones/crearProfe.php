<?php
require_once './../conexion.php';
$DNI = $_POST['DNI_Professor'];
$nombre = $_POST['Nom_Professor'];
$primer_cognom=$_POST['Primer_Cognom_Professor'];
$Segon_cognom=$_POST['Segon_Cognom_Professor'];
$tel=$_POST['Telefon_Professor'];
$correu=$_POST['Correu_Professor'];
$sexe=$_POST['Sexe_Professor'];
$tutor_assignat=$_POST['Tutor_Assignat'];
$curs_assignat=$_POST['Curs_Assignat'];
$Carrec=$_POST['Carrec_Professor'];
try {
    // Asegurarse de que la conexión a la base de datos se haya establecido correctamente
    if ($conn === null) {
        throw new PDOException("Conexión a la base de datos no establecida.");
    }

    $conn->beginTransaction();

    // Usar nombres de columnas y variables consistentes
    $stmt = $conn->prepare("INSERT INTO tbl_professors (DNI_professor, Nom_professor, Primer_Cognom_professor, Segon_Cognom_professor, Telefon_professor, Correu_professor, Sexe_professor, FK_ID_curs, Curs_assignat, Carrec_professor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,? )");
    $stmt->execute([$DNI,$nombre,$primer_cognom,$Segon_cognom,$tel,$correu,$sexe,$tutor_assignat,$curs_assignat,$Carrec]);

    $conn->commit();

    header('Location: ../crud_profes.php');
    exit();
} catch(PDOException $e) {
    $conn->rollBack();
    echo "Error en la transacción: " . $e->getMessage();
}

// Liberar recursos
$stmt = null;
$conn = null;
?>
