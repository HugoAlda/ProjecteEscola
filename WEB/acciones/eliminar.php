<?php
require_once '../conexion.php';
if(isset($_GET['ID']) && !empty($_GET['ID'])) {
$id=$_GET['ID'];
    $stmt = $conexion->prepare("DELETE FROM escuelas WHERE ID_Escuela = :id");
    $stmt->bindParam(':id', $id);
    if($stmt->execute()) {
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error al intentar eliminar el registro";
    }
} else {
    header('Location: ../index.php');
    exit();
}