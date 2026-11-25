<?php

require_once "ProdutoDAO.php";

$id = $_POST['id'];

if(!$id){
    exit("Campo id precisa ser enviado");
}

$produtoDAO = new ProdutoDAO();

$produtoDAO->excluirPorId($id);

header("Location: index.php");
exit();

?>