<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login - Curso Bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #tamanho{
            margin-top:70px; width:300px; border-radius:15px; border:2px solid #f3f3f3; padding:15px;
            -webkit-box-shadow: 10px 10px 32px -5px rgba(201,199,201,1);
            -moz-box-shadow: 10px 10px 32px -5px rgba(201,199,201,1);
            box-shadow: 10px 10px 32px -5px rgba(201,199,201,1);
        }
    </style>
</head>
<body>
    <section class="container" id="tamanho">
        <img src="Imagens/padlock.png" style="display:block;margin-left:auto;margin-right:auto;">

        <form action="index1.php" method="post">

            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Insira o nome do usuário" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
            </div>

       
        
        <div style="text-align:right;">
            <a href="_cadastrar_usuario_externo.php" style="padding-right:65px;">Não sou cadastrado</a>
            <button class="btn btn-success btn-sm" type="submit">Entrar</button>
        </div>
        </div>

        </form>
     
    </section>

    <footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </footer>
</body>