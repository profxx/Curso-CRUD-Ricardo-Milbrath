<?php

include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
// $nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios (nome_usuario,mail_usuario,senha_usuario,status) values ('$nomeusuario','$mail',sha1('$senha'),'$status')";
$inserir = mysqli_query($conexao,$sql);

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container" style="width:500px; padding-top:40px">
    <center>
    <h4>Usuário adicionado com sucesso, ative-o pelo e-mail.</h4>
    <div style="padding-top:20px">
        <a href="index.php" class="btn btn-sm btn-primary">Página Inicial</a> 
        <input type="button" value="Cadastrar Outro" class="btn btn-sm btn-warning" style="margin-left:20px;" onClick="history.go(-1)">
    </div>
    </center>
</div>