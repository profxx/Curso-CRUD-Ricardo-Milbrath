<?php

    include 'conexao.php';

    $id = $_POST['id_fornecedor'];
    
    $nomefornecedor = $_POST['nome_fornecedor'];
   
    $sql ="UPDATE `fornecedor` SET `nome_fornecedor`='$nomefornecedor' WHERE id_fornecedor = $id";

    $atualizar = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="container" style="width:400px; padding-top:50px;">
        <center>
            <h3>Fornecedor atualizado com sucesso.</h3>
            <div style="margin-top:20px">
                <a href="_listar_fornecedor.php" class="btn btn-sm btn-warning">Voltar</a>
            </div>
        </center>
    </div>