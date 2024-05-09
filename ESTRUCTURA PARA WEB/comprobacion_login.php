<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $host = "localhost";
        $nombreBD = "empresa";
        $userBD = $_POST['nombre'];
        $passBD = $_POST['contra'];

        $usuarioCorrecto = "";
        $contraCorrecta = "";

        if ($userBD === $usuarioCorrecto && $passBD === $contraCorrecta) {
        require_once('conexion.php')
        }
    }

    ?>