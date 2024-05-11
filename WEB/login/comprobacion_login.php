<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userBD = $_POST['nombre'];
        $passBD = $_POST['contra'];

        $usuarioCorrecto = "root";
        $contraCorrecta = "30891b92H@";
        

        if ($userBD === $usuarioCorrecto && $passBD === $contraCorrecta) {
            session_start();
            $_SESSION['usuario']=$userBD;
            $_SESSION['contra']=$passBD;
            header('Location: ../crud.php');
        } else {
            header('Location: ./formLogin.html?error=1');
        }
    }