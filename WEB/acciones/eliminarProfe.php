<?php
require_once '../conexion.php';

if (isset($_GET['DNI']) && !empty($_GET['DNI'])) {
    $DNI = $_GET['DNI'];
    $stmt = $conn->prepare("DELETE FROM tbl_professors WHERE DNI_professor = :DNI_professor");
    $stmt->bindParam(':DNI_professor', $DNI);
    if ($stmt->execute()) {
        header('Location: ../crud_profes.php');
        exit();
    } else {
        echo "Error al intentar eliminar el registro";
    }
} else {
    header('Location: ../crud_profes.php');
    exit();
}
?>