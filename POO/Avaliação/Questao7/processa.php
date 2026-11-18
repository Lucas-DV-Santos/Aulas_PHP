<?php

require_once ("Produto.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


$produto1 = new Produto($nome, $preco, $quantidade);

echo 'Produto: ' . $produto1->getNome() . '<br>'
. 'Preço: ' . $produto1->getPreco() . '<br>'
. 'Quantidade: ' . $produto1->getQuantidade() . '<br>'
. 'Valor Total: ' . $produto1->calcularTotal() . '<br><br>'; 

echo '<a href="index.html">Voltar para página de consulta</a>';


?>