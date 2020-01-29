<!DOCTYPE html>
<html>
<head>
    <title>Página do curso Bootstrap</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- Conferência se o usuário logou com a senha - TRANCANDO O menu.php -->
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

    <!-- Página aparente -->
    <section class="container" style="margin-top:50px;">
        <div class="row">
        <?php
            if(($nivel == 1)||($nivel == 2)){

        ?>

            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Produto</h5>
                    <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                    <a href="_adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
                </div>
                </div>
            </div>
        
        <?php } ?>

            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Lista de Produtos</h5>
                    <p class="card-text">Visualizar, editar e deletar os produtos em nosso estoque.</p>
                    <a href="_listar_produto.php" class="btn btn-primary">Produtos</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6" style="padding-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Categoria</h5>
                    <p class="card-text">Opção para adicionar categoria de produtos em nosso estoque.</p>
                    <a href="_adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6" style="padding-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Fornecedor</h5>
                    <p class="card-text">Opção para adicionar fornecedores.</p>
                    <a href="_adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6" style="padding-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cadastrar Usuários</h5>
                    <p class="card-text">Cadastrar novos usuários.</p>
                    <a href="_cadastrar_usuario.php" class="btn btn-primary">Novo</a>
                </div>
                </div>
            </div>

            <div class="col-sm-6" style="padding-top:20px">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aprovar Usuários</h5>
                    <p class="card-text">Aprovar usuários cadastrados.</p>
                    <a href="_aprovar_usuarios.php" class="btn btn-primary">Aprovar</a>
                </div>
                </div>
            </div>

        </div>
    </section>
    <footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </footer>
</body>
</html>