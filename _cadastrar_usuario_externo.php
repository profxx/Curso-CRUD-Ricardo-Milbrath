<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Usuários - Curso Bootstrap</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<section class="container" style="width:400px; padding-top:40px;">
    
    <h4>Cadastro de Usuário</h4>
    <form action="_insert_usuario_externo.php" method="post">
        <div class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
        <div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Insira o seu e-mail">
        <div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" id="txtSenha" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Crie sua senha"/>
        <div>

        <div class="form-group">
            <label>Repetir Senha</label>
            <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repita a sua senha" oninput="validaSenha(this)"/>
            <small style="text-align:right;">Precisa ser a mesma senha digitada acima</small>
        <div>

        <!--
        <div class="form-group" style="padding-top:10px;">
            <label>Nível de Acesso</label>
                <select name="nivelusuario" class="form-control">
                
                        <option value="1">Administrador</option>
                        <option value="2">Funcionário</option>
                        <option value="3">Conferente</option>
                 
                </select>
        </div>
        -->

        <div style="text-align:right;padding-top:10px;">
            <a href="index.php" style="padding-right:10px;" class="btn btn-sm btn-primary">Cancelar</a>
            <button type="reset" class="btn btn-sm btn-warning" style="padding-right:10px; padding-left:10px;">Limpar</button>
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>
    </form>


</section>
<footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
        <script>
            function validaSenha (input){ 
                if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
            } 
        </script>    
    
</footer>
</body>
</html>

