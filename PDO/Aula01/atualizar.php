<?php

require_once("ProdutoDAO.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$produtoDAO = new ProdutoDAO();

$produtoDAO->atualizarProduto($id, $nome, $quantidade, $preco);
header("Location: index.php");
exit;
?>