<?php 
    include 'conecta.php';

    $consulta = "SELECT MAX(nf) AS ultima FROM nota_fiscal";
    $consulta = $conexao -> query($consulta);
    $linha = $consulta -> fetch_assoc();
    $ultimo = $linha['ultima'];

    session_start();
    $_SESSION['nf'] = $ultimo;
?>

<?php 

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
    <head>
        <title>Insere Itens</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
    </head>
    </nav>
        <div class = "container">
            <h1>PRODUTO</h1>

            <form action = "insere_item.php?nf='<?php echo $ultimo; ?>'" method = "post" id = "compra">
                <section id = "nfu">
                    NF: <input type = "text" name = "nf" value = "<?php echo $ultimo; ?>">
                </section>
                <br>
                <section id = "prodo">
                    Produto:
                    <select name = "produto_opcao" id = "produto_opcao">
                        <?php 
                            $consulta = "SELECT * FROM produtos";
                            foreach ($conexao -> query($consulta) as $linha) {
                        ?>
                        <option 
                            value = "<?php echo $linha['id']; ?>">
                            <?php echo $linha['nome']; ?>
                        </option>
                        <?php        
                            }
                        ?>         
                    </select>
                </section>
                <section>
                    Qtde: <input type = "text" name = "qtde">
                </section>
                <hr>
                <input type = "submit" value = "ADICIONAR">
            </form>
        </div>
    </body>
</html>