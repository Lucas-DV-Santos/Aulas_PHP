<?php

require_once __DIR__ . "/../../includes/UsuarioDAO.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];


$usuarioDAO = new UsuarioDAO();
$dadosUser = $usuarioDAO->login($email, $senha, $nome);

if(!$dadosUser || $senha != $dadosUser['senha'] || $nome != $dadosUser['nome']){
    header("Location: ../../pages/login.html");
    exit();
}

session_start();
$_SESSION['nome'] = $dadosUser['nome'];
$_SESSION['id'] = $dadosUser['id'];
$_SESSION['email'] = $dadosUser['email'];
$_SESSION['acesso'] = $dadosUser['acesso'];

if($dadosUser['acesso'] == 'man'){
    header("Location: ../manutencao/dashboard.php");
}elseif($dadosUser['acesso'] == 'mor'){
    header("Location: ../morador/dashboard.php");
}elseif($dadosUser['acesso'] == 'adm'){
    header("Location: ../admin/dashboard.php");
}
?>