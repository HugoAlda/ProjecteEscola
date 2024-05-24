<?php
// Construir la consulta para obtener el total de registros
$consulta_default = 'SELECT alu.Matricula_alumne, alu.DNI_alumne, alu.Nom_alumne, alu.Primer_Cognom_alumne, alu.Segon_Cognom_alumne, alu.Telefon_alumne, alu.Correu_alumne, alu.Sexe_alumne, c.Nom_curs 
FROM tbl_alumnes alu 
INNER JOIN tbl_curs c 
ON alu.FK_ID_curs = c.ID_curs 
ORDER BY alu.Matricula_alumne ASC;';

$contador = "SELECT COUNT(*) AS 'Registros Totales' FROM ($consulta_default) AS 'Contador'";
$consulta_contador = $pdo->prepare($contador);
if ($id_profesor) {
    $consulta_contador->bindParam(':id_profesor', $id_profesor);
}
$consulta_contador->execute();
$registros_totales = $consulta_contador->fetchColumn();

-------------------------------------------------------------------------------------------------

// Verificar si se ha enviado una consulta de búsqueda
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $_GET['search'];
    if ($tabla == 'alumnos') {
        $sql_base = "SELECT DISTINCT a.*, c.codi_clase 
                FROM tbl_alumno a 
                LEFT JOIN tbl_clase c ON a.id_clase = c.id_clase 
                WHERE a.nom_alu LIKE '%$search%' 
                    OR a.apellido1_alu LIKE '%$search%' 
                    OR a.apellido2_alu LIKE '%$search%' 
                    OR a.dni_alum LIKE '%$search%' 
                    OR a.email_alum LIKE '%$search%' 
                    OR a.telf_alum LIKE '%$search%' 
                    OR c.codi_clase LIKE '%$search%' 
                GROUP BY a.id_alumno 
                ORDER BY $order_by $orden";
        if ($id_profesor) {
            $sql_base .= " AND p.id_profesor = :id_profesor";
        }
    } elseif ($tabla == 'profesores') {
        $sql_base = "SELECT DISTINCT p.*, c.nombre_clase 
                FROM tbl_profesor p 
                LEFT JOIN tbl_clase c ON p.id_profesor = c.id_profesor 
                WHERE p.nom_prof LIKE '%$search%' 
                    OR p.apellido1_prof LIKE '%$search%' 
                    OR p.apellido2_prof LIKE '%$search%' 
                    OR p.dni_prof LIKE '%$search%' 
                    OR p.email_prof LIKE '%$search%' 
                    OR p.telf_prof LIKE '%$search%' 
                    OR c.nombre_clase LIKE '%$search%' 
                ORDER BY $order_by $orden";
    }
}
