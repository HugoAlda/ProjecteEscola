<?php
require_once './../conexion.php';
$DNI_Professor = $_POST['DNI_Professor'];
$Nom_Professor = $_POST['Nom_Professor'];
$Primer_Cognom_Professor = $_POST['Primer_Cognom_Professor'];
$Segon_Cognom_Professor = $_POST['Segon_Cognom_Professor'];
$Telefon_Professor = $_POST['Telefon_Professor'];
$Correu_Professor = $_POST['Correu_Professor'];
$Sexe_Professor = $_POST['Sexe_Professor'];
$Cursos_assignats=$_POST['Cursos_assignats'];
$Carrec_Professor=$_POST['Carrec_Professor'];
$Tutor_assignat=$_POST['Tutor_assignat'];
try {
    $conn->beginTransaction();
    $stmt = $conn->prepare("UPDATE tbl_professors SET Nom_Professor = ?, Primer_Cognom_Professor = ?, Segon_Cognom_Professor = ?, Telefon_Professor = ?, Correu_Professor = ?, Sexe_professor = ?, Cursos_assignats = ?, Carrec_Professor = ?, Tutor_assignat = ? WHERE DNI_Professor = ?");
    $stmt->execute([$Nom_Professor, $Primer_Cognom_Professor, $Segon_Cognom_Professor, $Telefon_Professor, $Correu_Professor, $Sexe_Professor, $Cursos_assignats, $Carrec_Professor, $Tutor_assignat,$DNI_Professor]);
    $conn->commit();

    header('Location: ./../crud_profes.php');
    exit();
} catch(PDOException $e) {
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}
$stmt = null;
$conn = null;
?>