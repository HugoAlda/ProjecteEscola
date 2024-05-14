<?php
require_once '../conexion.php';

if (isset($_GET['ID']) && !empty($_GET['ID'])) {
    $id = $_GET['ID'];
    $stmt = $conn->prepare("DELETE FROM bd_escola WHERE Matricula_alumne = :id");
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        header('Location: ../crud.php');
        exit();
    } else {
        echo "Error al intentar eliminar el registro";
    }
} else {
    header('Location: ../crud.php');
    exit();
}
?>
