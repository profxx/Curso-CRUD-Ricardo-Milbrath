<?php

    include 'conexao.php';

    $id = $_GET["id"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Fornecedor - Curso Bootstrap</title>
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

        <h4>Editar Fornecedor</h4>
        
        <form action="_atualizar_fornecedor.php" method="post">

            <?php

                $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
                $buscar = mysqli_query($conexao,$sql);

                    while($array = mysqli_fetch_array($buscar)){
                        $id_fornecedor = $array['id_fornecedor'];
                        $nome_fornecedor = $array['nome_fornecedor'];
                  

            ?>

     
        <div class="form-group">
            <label>Nome Fornecedor</label>
            <input type="text" name="nome_fornecedor" class="form-control" value="<?php echo $nome_fornecedor?>">
        </div>
        
        <div style="text-align:right;">
            <input type="button" value="Cancelar" class="btn btn-sm btn-primary" onClick="history.go(-1)">
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