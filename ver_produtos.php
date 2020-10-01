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
        include 'navbar.php'
    ?>
        </nav>

        <head>
            <title>Ver Produtos</title>
            <link rel = "stylesheet" type = "text/css" href = "style.css">
        </head>

        <div class = "container">
            <section id = "nota_produto">
                <?php
                    include 'conecta.php';

                    $consulta = "SELECT * FROM produtos";

                    foreach ($conexao -> query($consulta) as $linha) {
                        echo "Produto: ".$linha['nome'] ."<br>";
                        echo "Preço: ".$linha['preco'] ."<br><hr>";
                    }
                    echo "<br>";
                ?>
                <p><a href = "venda.php" id = "inicio">VOLTAR INICIO</a></p>
            </section>
        </div> 
    </body>
</html>