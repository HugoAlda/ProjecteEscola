<?php
require_once '../conexion.php';
$nombre = $_POST['Nombre_Alumno'];
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


CREATE TABLE tbl_alumnes(
    Matricula_alumne CHAR(9) NOT NULL PRIMARY KEY,
    DNI_alumne CHAR(9) NOT NULL,
    Nom_alumne VARCHAR(30) NULL,
    Primer_Cognom_alumne VARCHAR(60) NOT NULL,
    Segon_Cognom_alumne VARCHAR(60) NOT NULL,
    Telefon_alumne CHAR(9) NOT NULL,
    Correu_alumne VARCHAR(50) NOT NULL,
    Sexe_alumne ENUM('Home','Dona','No binari') NOT NULL,
    FK_ID_curs INT NOT NULL
  );