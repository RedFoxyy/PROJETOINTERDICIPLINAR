<?php

    session_start();

    include 'conecta.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao -> query($consulta);
    $registros = $resultado -> num_rows;

    $registro_usuario = mysqli_fetch_assoc($resultado);


    if($registros == 1) {
        $_SESSION['id'] = $registro_usuario['id'];
        $_SESSION ['nome'] = $registro_usuario ['nome'];
        $_SESSION ['email'] = $registro_usuario ['email'];

        header('Location: venda.php');
    }
    else {
        header ('Location: index.php');
    }

?>