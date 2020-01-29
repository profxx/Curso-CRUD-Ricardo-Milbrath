<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Produtos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://kit.fontawesome.com/95870fe677.js" crossorigin="anonymous"></script> <!-- Font Awesome link pego no site para fontes -->
    </head>

    <body>
        
        <section class="container" style="padding-top:20px; width:500px;">
            <h3>Lista de Fornecedores Cadastrados</h3>
            <br>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Nome Fornecedor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                        <?php
                            include 'conexao.php';

                            $sql = "SELECT * FROM `fornecedor`";
                            $busca = mysqli_query ($conexao, $sql);

                            while ($array = mysqli_fetch_array($busca)){

                                $id_fornecedor = $array['id_fornecedor'];
                                $nome_fornecedor = $array['nome_fornecedor'];
                                                          
                        ?>

                    <tr>    
                        <td><?php echo $nome_fornecedor ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="_editar_fornecedor.php?id=<?php echo $id_fornecedor?>" role="button"><i class="far fa-edit"></i> Editar</a>
                            <a class="btn btn-danger btn-sm" href="_deletar_fornecedor.php?id=<?php echo $id_fornecedor?>" role="button"><i class="far fa-trash-alt"></i></a>
                        </td>
                        <?php } ?>
                    </tr>

            </table>       
            <div class="container" style="text-align:right;">
                <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            </div>         
        </section>

        <footer>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>