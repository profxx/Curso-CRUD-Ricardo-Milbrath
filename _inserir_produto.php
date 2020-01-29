<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto']; // recebe o valor do atributo
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <div class="container" style="width:500px; padding-top:20px">
        <center>
        <h4>Produto adicionado com sucesso.</h4>
        <div style="padding-top:20px">
            <a href="index.php" class="btn btn-sm btn-primary">Voltar</a>
            <a href="_adicionar_produto.php" role="button" class="btn btn-sm btn-warning" style="margin-left:20px;">Cadastrar Novo Item</a>
        </div>
        </center>
    </div>