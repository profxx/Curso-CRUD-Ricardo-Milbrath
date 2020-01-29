<?php

    include 'conexao.php';

    $id = $_POST['id'];
    
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql ="UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container" style="width:400px; padding-top:50px;">
        <center>
            <h3>Produto atualizado com sucesso.</h3>
            <div style="margin-top:20px">
                <a href="_listar_produto.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
        </center>
    </div>