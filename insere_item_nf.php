<?php
    include 'conecta.php';
    session_start();

    $nf = $_SESSION['nf'];
    $idproduto = $_POST['id_prod'];
    $qtde = $_POST['qtde'];
    $subtotal = $_POST['subtotal'];

    echo "NF -> " . $nf . "<br>";
    echo "ID_PRODUTO -> " . $idproduto . "<br>";
    echo "QTDE -> " . $qtde . "<br>";
    echo "SUBTOTAL -> " . $subtotal . "<br>";

    $consulta = $conexao -> prepare(
        "INSERT INTO itens_nf (cod_produto, num_nf, qtde, subtotal) 
        VALUES ('$idproduto', '$nf', '$qtde', '$subtotal')");
    $consulta -> execute();

    header ('Location: confirma_item.php');
?>