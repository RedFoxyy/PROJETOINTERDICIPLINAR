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
        <title>ITENS NOTA FISCAL</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    <body>
        
            <?php 
            
                include 'conecta.php';
                echo "<br>";

                $nf = $_SESSION['nf'];
                $id_prod = $_POST ['produto_opcao'];
                $qtde_prod = $_POST ['qtde'];

                $consulta = "SELECT preco, nome FROM produtos WHERE id = '$id_prod'";
                $consulta = $conexao -> query($consulta);
                $linha = $consulta -> fetch_assoc();
                
                $preco = $linha['preco'];
                $nome = $linha['nome'];

                $subtotal = $preco * $qtde_prod;
            
            ?>
            <div class = "container">
                <h1>INFORMAÇÃO DA COMPRA</h1>
                <form action = "insere_item_nf.php" method = "POST" id = "info">
                    <p>
                        ID PRODUTO: <input type = "text" name = "id_prod" value = "<?php echo $id_prod; ?>"
                        readonly ="readonly">
                    </p>
                    <p>
                        PRODUTO: <input type = "text" name = "nome_prod" value = "<?php echo $nome; ?>"
                        readonly = "readonly">
                    </p>
                    <p>
                        VALOR UNIT: <input type = "text" name = "valor_unit" value = "<?php echo $preco; ?>"
                        readonly = "readonly">
                    </p>
                    <p>
                        QTDE: <input type = "text" name = "qtde" value = "<?php echo $qtde_prod; ?>"
                        readonly = "readonly">
                    </p>
                    <p>
                        SUBTOTAL: <input type = "text" name = "subtotal" value = "<?php echo $subtotal; ?>"
                        readonly = "readonly">
                    </p>

                    <input type = "submit" value = "ADICIONAR PRODUTO">
                </form>
            </div>
    </body>
</html>