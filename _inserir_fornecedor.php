<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor']; // recebe o valor do atributo Nome Fornecedor

$sql = "INSERT INTO fornecedor(nome_fornecedor) values ('$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <div class="container" style="width:500px; padding-top:40px">
        <center>
        <h4>Fornecedor adicionado com sucesso.</h4>

        <div style="padding-top:20px">
        
                <a href="index.php" class="btn btn-sm btn-primary">Página Inicial</a> 
                <input type="button" value="Cadastrar Outro" class="btn btn-sm btn-warning" style="margin-left:20px;" onClick="history.go(-1)">
                
        </div>
        </center>
    </div>