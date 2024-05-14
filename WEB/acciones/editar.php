<?php
require_once '../conexion.php';
$Desc_curs = $_POST['Desc_curs'];
$nom = $_POST['Nom_curs'];
$id = $_POST['ID_curs'];
try {
    $conexion->beginTransaction();
    $stmt = $conexion->prepare("UPDATE bd_escola SET ID_curs = ?, Nom_curs = ?, Desc_curs = ?, 
    WHERE ID_escuela = ?");
    $stmt->execute([$nombre, $num, $id]);
    $conexion->commit();

    header('Location: ../index.php');
    exit();
} catch(PDOException $e) {
    $conexion->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}
$stmt = null;
$conexion = null;