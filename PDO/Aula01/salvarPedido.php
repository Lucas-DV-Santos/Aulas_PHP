<?php
require_once "PedidoDAO.php";


$produtoId = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];

if  (!$produtoId || $quantidade < 0){
    exit("Alguns dados não foram preenchidos!");
}

$PedidoDAO = new PedidoDAO();
$PedidoDAO->cadastrar($produtoId, $quantidade);

header("Location: CadastrarPedido.php");

?>