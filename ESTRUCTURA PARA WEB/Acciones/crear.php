<?php
require_once '../conexion.php';
$nombre = $_POST['Nombre_Escuela'];
$num = $_POST['Num_alumn'];

try {
    $conexion->beginTransaction();
    $stmt = $conexion->prepare("INSERT INTO escuelas (Nombre_Escuela, Num_alumn) VALUES (?, ?)");
    $stmt->execute([$nombre, $num]);
    $conexion->commit();

    header('Location: ../index.php');
    exit();
} catch(PDOException $e) {
    $conexion->rollback();
    echo "Error en la transacción: " . $e->getMessage();
}
$stmt = null;
$conexion = null;