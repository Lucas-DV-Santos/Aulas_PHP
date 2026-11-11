<?php

require_once("produtoDAO.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade=$_POST['quantidade'];

if(!$nome || $preco < 0 || $quantidade < 0){
    exit("Dados inválidos");
}

$produtoDAO = new ProdutoDAO();

$produtoDAO ->cadastrar($nome,$preco,$quantidade);

header("Location: cadastrar.php");
exit;

?>