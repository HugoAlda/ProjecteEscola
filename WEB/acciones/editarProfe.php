<?php
require_once './../conexion.php';

$DNI_Professor = $_POST['DNI_Professor'];
$Nom_Professor = $_POST['Nom_Professor'];
$Primer_Cognom_Professor = $_POST['Primer_Cognom_Professor'];
$Segon_Cognom_Professor = $_POST['Segon_Cognom_Professor'];
$Telefon_Professor = $_POST['Telefon_Professor'];
$Correu_Professor = $_POST['Correu_Professor'];
$Sexe_Professor = $_POST['Sexe_Professor'];
$FK_ID_curs = $_POST['Assignacio_Tutor'];
$Carrec_Professor=$_POST['Carrec_Professor'];

try {
    $conn->beginTransaction();
    $stmt = $conn->prepare("UPDATE tbl_professors SET Nom_Professor = ?, Primer_Cognom_Professor = ?, Segon_Cognom_Professor = ?, Telefon_Professor = ?, Correu_Professor = ?, Sexe_Professor = ?, FK_ID_curs = ?, Carrec_Professor = ? WHERE DNI_Professor = ?");
    $stmt->execute([$Nom_Professor, $Primer_Cognom_Professor, $Segon_Cognom_Professor, $Telefon_Professor, $Correu_Professor, $Sexe_Professor, $FK_ID_curs, $Carrec_Professor, $DNI_Professor]);
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