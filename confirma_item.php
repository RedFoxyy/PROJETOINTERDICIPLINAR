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
            <title>Confirmar Itens</title>
            <link rel = "stylesheet" type = "text/css" href = "style.css">
        </head>
        <div class = "container">
            <section id = "total">
                <?php
                
                    include 'conecta.php';
                    echo "<hr>";

                    $nf = $_SESSION['nf'];

                    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";
                    $total = 0;

                    echo "<h1>NF: ".$nf ."</h1><hr>";

                    foreach ($conexao -> query($consulta) as $linha) {
                        echo "Cod Produto: ".$linha['cod_produto'] ."<br>";
                        echo "Quantidade: ".$linha['qtde'] ."<br>";
                        echo "Subtotal: ".$linha['subtotal'] ."<br>";
                        $total = $total + $linha['subtotal'];
                        echo "<hr>";
                    }

                    echo "<b>TOTAL DA NOTA: R$ ".$total."</b><hr>";
                    
                ?>
            </section>
            
        
            <section id = "outros">
                <p>O QUE DESEJA FAZER?</p>
                <p><a href = "seleciona_ultima_nf.php">INSERIR OUTRO PRODUTO</a></p>
                <p><a href = "venda.php?total=<?php echo $total; ?>">FINALIZAR NOTA FISCAL</a></p>
            </section>
        </div>
    </body>
</html>