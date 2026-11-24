<?php

require_once __DIR__ . "/../../includes/dao/UsuarioDAO.php";

$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$acesso = $_POST['acesso'];

$usuarioDAO = new UsuarioDAO();
$dadoCadastro = $usuarioDAO->cadastro($nome, $email, $senha, $acesso);

header('Location: ../admin/dashboard.php');

?>