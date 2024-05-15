<?php
require_once '../conexion.php';

if (isset($_GET['Matricula_Alumne']) && !empty($_GET['Matricula_Alumne'])) {
    $id = $_GET['Matricula_Alumne'];
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
