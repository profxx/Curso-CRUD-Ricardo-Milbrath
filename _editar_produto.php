<?php

    include 'conexao.php';

    $id = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto - Curso Bootstrap</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- CSS da página editada por mim -->
        <style>
            #tamanhoContainer{
                max-width: 500px;
                margin-top:40px;
            }
            #botao{
                background-color: #899752;
                color: #FFFFFF;
            }

        </style>
        
</head>
<body>


    
    <div class="container" id="tamanhoContainer">

        <h4>Formulário de Cadastro</h4>
        
        <form action="_atualizar_produto.php" method="post">

            <?php

                $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao,$sql);

                    while($array = mysqli_fetch_array($buscar)){
                        $id_estoque = $array['id_estoque'];
                        $nroproduto = $array['nroproduto'];
                        $nomeproduto = $array['nomeproduto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                    

            ?>

        <div class="form-group" style="margin-top:20px;">
            <label>Nro Produto</label>
            <input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto?>" disabled>
            <input type="number" name="id" class="form-control" value="<?php echo $id?>" style="display:none;">

        </div>
        
        <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto?>">
        </div>
        
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade?>">
        </div>
        
        <div class="form-group">
            <label>Categoria</label>
            <select name="categoria" class="form-control">
                <option value="">Selecionar Categoria</option>
                <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while($array = mysqli_fetch_array($buscar)){
                        
                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['nome_categoria'];
                    
                ?>
                <option><?php echo $nome_categoria?></option>
                
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <label>Fornecedor</label>
            <select name="fornecedor" class="form-control">
            <option value="">Selecionar Fornecedor</option>
            <?php
                include 'conexao.php';
                $sql = "SELECT * FROM fornecedor order by nome_fornecedor ASC";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    $id_fornecedor = $array['id_fornecedor'];
                    $nome_fornecedor = $array['nome_fornecedor'];
            ?>
            <option><?php echo $nome_fornecedor?></option>
            <?php } ?>
            </select>

        <div style="text-align:right;">
            <button type="submit" class="btn btn-sm" id="botao">Atualizar</button>
        </div>
        <?php } ?>
        </form>
    </div>





    <footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </footer>
</body>
</html>