<?php

require_once "UsuarioDAO.php";

$email = $_POST['email'];
$senha = $_POST['senha'];


$usuarioDAO = new UsuarioDAO();
$dadosUser = $usuarioDAO->login($email, $senha);

if($senha != $dadosUser['senha']){
    header("Location: index.html");
    exit();
}

session_start();
$_SESSION['nome'] = $dadosUser['nome'];
$_SESSION['id'] = $dadosUser['id'];
$_SESSION['email'] = $dadosUser['email'];
$_SESSION['acesso'] = $dadosUser['acesso'];

if($dadosUser['acesso'] == 'man'){
    header("Location: Manutencao_DashBoard.php");
}elseif($dadosUser['acesso'] == 'mor'){
    header("Location: Morador_DashBoard.php");
}elseif($dadosUser['acesso'] == 'adm'){
    header("Location: ADM_DashBoard.php");
}
?>