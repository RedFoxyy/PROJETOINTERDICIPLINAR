<?php

    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['nivel']
    );

    header('Location: index.php');

?>