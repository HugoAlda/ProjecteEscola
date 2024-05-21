<?php
require_once './../conexion.php';

$Matricula_Alumne = $_POST['Matricula_Alumne'];
$DNI_Alumne = $_POST['DNI_Alumne'];
$Nom_Alumne = $_POST['Nom_Alumne'];
$Primer_Cognom_Alumne = $_POST['Primer_Cognom_Alumne'];
$Segon_Cognom_Alumne = $_POST['Segon_Cognom_Alumne'];
$Telefon_Alumne = $_POST['Telefon_Alumne'];
$Correu_Alumne = $_POST['Correu_Alumne'];
$FK_ID_curs = $_POST['FK_ID_curs'];
$Sexe_Alumne = $_POST['Sexe_Alumne'];

try {
    $conn->beginTransaction();
    $stmt = $conn->prepare("UPDATE tbl_alumnes SET DNI_Alumne = ?, Nom_Alumne = ?, Primer_Cognom_Alumne = ?, Segon_Cognom_Alumne = ?, Telefon_Alumne = ?, Correu_Alumne = ?, FK_ID_curs = ?, Sexe_Alumne = ? WHERE Matricula_alumne = ?");
    $stmt->execute([$DNI_Alumne, $Nom_Alumne, $Primer_Cognom_Alumne, $Segon_Cognom_Alumne, $Telefon_Alumne, $Correu_Alumne, $FK_ID_curs, $Sexe_Alumne, $Matricula_Alumne]);
    $conn->commit();

    header('Location: ./../crud.php');
    exit();
} catch(PDOException $e) {
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}
$stmt = null;
$conn = null;
?>