<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Produtos</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://kit.fontawesome.com/95870fe677.js" crossorigin="anonymous"></script> <!-- Font Awesome link pego no site para fontes -->
    </head>

    <body>
        <div class="container" style="text-align:right;">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>
        
        <?php

        include 'conexao.php';

        session_start();

        $usuario = $_SESSION['usuario'];

        if(!isset($_SESSION['usuario'])){
            header('Location:index.php');
        };

        $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
        $buscar = mysqli_query($conexao,$sql);
        $array = mysqli_fetch_array($buscar);
        $nivel = $array['nivel_usuario'];

        ?>

        <section class="container" style="padding-top:20px">
            <h3>Lista de Produtos</h3>
            <br>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nº Produto</th>
                        <th scope="col">Nome Produto</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                        <?php
                            include 'conexao.php';

                            $sql = "SELECT * FROM `estoque`";
                            $busca = mysqli_query ($conexao, $sql);

                            while ($array = mysqli_fetch_array($busca)){

                                $id_estoque = $array['id_estoque'];
                                $nroproduto = $array['nroproduto'];
                                $nomeproduto = $array['nomeproduto'];
                                $categoria = $array['categoria'];
                                $quantidade = $array['quantidade'];
                                $fornecedor = $array['fornecedor'];
                            
                        ?>

                    <tr>    
                        <td><?php echo $id_estoque ?></td>
                        <td><?php echo $nroproduto ?></td>
                        <td><?php echo $nomeproduto ?></td>
                        <td><?php echo $categoria ?></td>
                        <td><?php echo $quantidade ?></td>
                        <td><?php echo $fornecedor ?></td>
                        <td>
            <?php
                if(($nivel == 1)||($nivel == 2)){

            ?>
                            <a class="btn btn-warning btn-sm" href="_editar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-edit"></i> Editar</a>
            <?php }
            
            if($nivel == 1){
            ?>
                            <a class="btn btn-danger btn-sm" href="_deletar_produto.php?id=<?php echo $id_estoque?>" role="button"><i class="far fa-trash-alt"></i></a>

            <?php } ?>
                        </td>
            <?php } ?>
                    </tr>

            </table>       
            <div class="container" style="text-align:right;">
                <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
            </div>         
        </section>

        <footer>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>