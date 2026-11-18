<?php

require_once "UsuarioDAO.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$acesso = $_POST['acesso'];

$usuarioDAO = new UsuarioDAO();
$dadoCadastro = $usuarioDAO->cadastro($nome, $email, $senha, $acesso);

header('Location:ADM_DashBoard.php');

?>