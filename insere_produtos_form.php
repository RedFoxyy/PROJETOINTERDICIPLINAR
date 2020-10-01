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
        </nav>

        <head>
            <title>Insere Produtos</title>
            <link rel = "stylesheet" type = "text/css" href = "style.css">
        </head>        
        <div class = "container">
            <h1>CADASTRAR PRODUTOS</h1>           

                <form action = "insere_produto.php" method = "POST" id = "prod">
                    <section id = "nome">
                        Nome do Produto: <input type = "text" name = "nome" id = "nomeprod" required = "required"><br>
                    </section>
                    Preço do Produto: <input type="decimal" min="0" max="10000" step="1" name="preco" id="preco" required="required"><br>
                    <br><hr>
                    <input type = "submit" name = "CADASTRAR">
                </form>
        </div>
    </body>
</html>