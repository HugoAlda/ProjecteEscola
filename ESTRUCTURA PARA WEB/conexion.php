<?php
try {
        $conn = new PDO("mysql:host=$host;dbname=$nombreBD", $userBD, $passBD);
        echo 'Conexión realizada correctamente<br>';
    } catch (PDOException $e) {
        echo "Error de conexión con la base de datos:".$e->getMessage();
    }

?>