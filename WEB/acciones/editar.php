<?php
require_once '../conexion.php';
$Matricula_alumne = $_POST['Matricula_alumne'];
$DNI_Alumne = $_POST['DNI_Alumne'];
$Nom_Alumne = $_POST['Nom_Alumne'];
$Primer_Cognom_Alumne = $_POST['Primer_Cognom_Alumne'];
$Segon_Cognom_Alumne = $_POST['Segon_Cognom_Alumne'];
$Telefon_Alumne = $_POST['Telefon_Alumne'];
$Correu_Alumne = $_POST['Correu_Alumne'];
$Curs_Alumne = $_POST['Curs_Alumne'];
$Sexe_Alumne = $_POST['Sexe_Alumne'];

try {
    $conexion->beginTransaction();
    $stmt = $conexion->prepare("UPDATE tbl_alumnes SET Matricula_alumne = ?, DNI_Alumne = ?, Nom_Alumne = ?, Primer_Cognom_Alumne = ?, Segon_Cognom_Alumne = ?, Telefon_Alumne = ?, Correu_Alumne = ?, Curs_alumne = ?, Sexe_Alumne = ?,
    WHERE Matricula_alumne = ?");
    $stmt->execute([$Matricula_alumne, $DNI_Alumne, $Nom_Alumne, $Primer_Cognom_Alumne, $Segon_Cognom_Alumne, $Telefon_Alumne, $Correu_Alumne, $Sexe_Alumne]);
    $conexion->commit();

    header('Location: ../index.php');
    exit();
} catch(PDOException $e) {
    $conexion->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}
$stmt = null;
$conexion = null;