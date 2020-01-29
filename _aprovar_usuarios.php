<!DOCTYPE html>
<html>
    <head>
        <title>Aprovar Usuários</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://kit.fontawesome.com/95870fe677.js" crossorigin="anonymous"></script> <!-- Font Awesome link pego no site para fontes -->
    </head>

    <body>
        
        <section class="container" style="padding-top:20px;">
            <h3>Lista de Usuários a serem Aprovados</h3>
            <br>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Nível</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>

                        <?php
                            include 'conexao.php';

                            $sql = "SELECT * FROM `usuarios` WHERE status = 'Inativo'";
                            $busca = mysqli_query ($conexao, $sql);

                            while ($array = mysqli_fetch_array($busca)){

                                $id_usuario = $array['id_usuario'];
                                $nome_usuario = $array['nome_usuario'];
                                $mail = $array['mail_usuario'];
                                $nivel = $array['nivel_usuario'];
                                                          
                        ?>

                    <tr>    
                        <td><?php echo $nome_usuario ?></td>
                        <td><?php echo $mail ?></td>
                        <td><?php echo $nivel ?></td>

                        <td>
                            <a class="btn btn-success btn-sm" href="_aprovar_usuario_sim.php?id=<?php echo $id_usuario?> & nivel=1" role="button"><i class="far fa-smile-beam"></i> Administrador</a>
                            <a class="btn btn-warning btn-sm" href="_aprovar_usuario_sim.php?id=<?php echo $id_usuario?> & nivel=2" role="button"><i class="far fa-smile-beam"></i> Funcionário</a>
                            <a class="btn btn-dark btn-sm" href="_aprovar_usuario_sim.php?id=<?php echo $id_usuario?> & nivel=3" role="button"><i class="far fa-smile-beam"></i> Conferente</a>

                            <a class="btn btn-danger btn-sm" href="_deletar_usuario.php?id=<?php echo $id_usuario?>" role="button"><i class="far fa-trash-alt"></i> Deletar</a>

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