<?php
require_once '../conexion.php';
// try{ 
if (isset($_GET['DNI']) && !empty($_GET['DNI'])) {
    try{
        $DNI = $_GET['DNI'];
        $conn->beginTransaction();
        $stmt = $conn->prepare("DELETE FROM tbl_moduls WHERE FK_DNI_professor = :DNI_professor");
        $stmt->bindParam(':DNI_professor', $DNI);
        $stmt->execute();
        $stmt = $conn->prepare("DELETE FROM tbl_professors WHERE DNI_professor = :DNI_professor");
        $stmt->bindParam(':DNI_professor', $DNI);
        $stmt->execute();
        $conn->commit();
        header('Location: ../crud_profes.php');
        exit();
    }catch(PDOException $e){
        $conn->rollback();
        echo "Error: " . $e->getMessage();
        header('Location: ../crud_profes.php');
    }
}
// }
// catch(PDOException $e){
//     echo "Antes de eliminar este profesor, desasignalo de los modulos";
// }
?>