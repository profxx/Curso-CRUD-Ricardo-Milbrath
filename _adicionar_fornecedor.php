<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Fornecedor - Curso Bootstrap</title>
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

<section class="container" id="tamanhoContainer">

    <h4>Cadastro de Fornecedor</h4>

    <form action="_inserir_fornecedor.php" method="post">

        <div class="form-group" style="padding-top:20px;">
            <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
        </div>

        <div style="text-align:right; padding-top:10px;">
            <a href="index.php" class="btn btn-sm btn-primary">Voltar</a>
            <button type="submit" class="btn btn-sm" id="botao">Cadastrar</button>
        </div>
   
    </form>
 
</section>

<footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </footer>
</body>
</html>