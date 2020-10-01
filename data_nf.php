<?php 
    session_start();

    if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true)
    && (!isset($_SESSION['email']) == true))  {
        header ('Location: index.php');
    }

    include 'conecta.php';

?>

<!DOCTYPE html>
<html>
    <?php
        include 'navbar.php';
    ?>
    <head>
        <title>Inserir Data</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
        </nav>
            <div class = "container">
                <h1>INSIRA A DATA DA VENDA</h1>
                <form action = "gera_nf.php" method = "post" id = "data">
                    DATA: <input type = "date" name = "data">
                    <hr>
                    <input type = "submit" value = "CONTINUAR">
                </form>
            </div>
        </body>
</html>