<?php 
    session_start();

    if ((!isset($_SESSION['id']) == true) && (!isset($_SESSION['nome']) == true)
    && (!isset($_SESSION['email']) == true))  {
        header ('Location: index.php');
    }
?>    

<!DOCTYPE html>
<html>
    <?php
        include 'navbar.php';
    ?>
    <head>
        <title>Página Inicial</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
            
            </nav>
                <div class = "container">
                    <h1>COMEÇAR UMA NOVA VENDA</h1>

                    <form action = "data_nf.php" method = "post" id = "explicacao">
                        <p>Ao clicar em INICIAR VENDA, o sistema irá gerar uma nova nota fiscal na tabela nota_fiscal sem o valor total</p>
                        <p>Na próxima tela será solicitada a data da NF</p>
                        <p>O valor total será atualizado após a inserção dos itens da nota</p>
                        <hr>
                        <input type = "submit" value = "INICIAR VENDA">
                    </form>
                </div> 
        </body>
</html>