<?php

include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if ($nivel == 1) {
    
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "ADMINISTADOR APROVADO";
    
}
if ($nivel == 2) {
    
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "FUNCIONÁRIO APROVADO";
}
if ($nivel == 3) {
    
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($conexao,$update);
    echo "CONFERENTE APROVADO";
}

header("Location: _aprovar_usuarios.php"); //Redirecionar à página de aprovação

?>