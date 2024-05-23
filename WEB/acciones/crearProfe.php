<?php
require_once './../conexion.php';
$DNI = $_POST['DNI_Professor'];
$nombre = $_POST['Nom_Professor'];
$primer_cognom=$_POST['Primer_Cognom_Professor'];
$Segon_cognom=$_POST['Segon_Cognom_Professor'];
$tel=$_POST['Telefon_Professor'];
$correu=$_POST['Correu_Professor'];
$sexe=$_POST['Sexe_Professor'];
$curs_assignat=$_POST['Cursos_assignats'];
$Carrec=$_POST['Carrec_Professor'];
$Tutor_assignat=$_POST['Tutor_assignat'];
try {
    // Asegurarse de que la conexión a la base de datos se haya establecido correctamente
    if ($conn === null) {
        throw new PDOException("Conexión a la base de datos no establecida.");
    }

    $conn->beginTransaction();

    // Usar nombres de columnas y variables consistentes
    $stmt = $conn->prepare("INSERT INTO tbl_professors (DNI_professor, Nom_professor, Primer_Cognom_professor, Segon_Cognom_professor, Telefon_professor, Correu_professor, Sexe_professor, Cursos_assignats, Carrec_professor,Tutor_assignat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,? )");
    $stmt->execute([$DNI,$nombre,$primer_cognom,$Segon_cognom,$tel,$correu,$sexe,$curs_assignat,$Carrec,$Tutor_assignat]);

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
