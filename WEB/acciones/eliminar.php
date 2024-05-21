<?php
require_once '../conexion.php';

if (isset($_GET['ID']) && !empty($_GET['ID'])) {
    $id = $_GET['ID'];
    $stmt = $conn->prepare("DELETE FROM tbl_alumnes WHERE Matricula_alumne = :Matricula_Alumne");
    $stmt->bindParam(':Matricula_Alumne', $id);
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