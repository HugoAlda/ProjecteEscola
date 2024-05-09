<?php
require_once '../conexion.php';
$nombre = $_POST['Nombre_Escuela'];
$num = $_POST['Num_alumn'];
$id = $_POST['ID_escuela'];
try {
    $conexion->beginTransaction();
    $stmt = $conexion->prepare("UPDATE escuelas SET Nombre_Escuela = ?, Num_alumn = ?, Fecha_actualizacion = NOW()
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