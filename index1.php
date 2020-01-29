<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mail_usuario,senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)){
    $senha = $array['senha_usuario'];
    $senhadecodificada = sha1($senhausuario);

    if ($total > 0){
        #Conferir senha
        if($senhadecodificada == $senha){
            session_start();
                $_SESSION['usuario'] = $usuario;
            header('Location:menu.php');

        }else{
            heder('Location:senhaerrada.php');
        }
    
    }else{
        #Colocar mensagem de erro
        header('Location:erro.php');
    }

}



?>