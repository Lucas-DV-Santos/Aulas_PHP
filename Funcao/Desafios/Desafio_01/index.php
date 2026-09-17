<?php

require_once "funcao.php";

$pedidos = [ 
    [ 'nomeProduto' => 'Mouse', 'preco' => 50, 'quantidade' => 2 ], 
    [ 'nomeProduto' => 'Teclado', 'preco' => 120, 'quantidade' => 2 ], 
    [ 'nomeProduto' => 'Headset', 'preco' => 180, 'quantidade' => 2 ], 
    [ 'nomeProduto' => 'Monitor', 'preco' => 450, 'quantidade' => 2 ], 
    [ 'nomeProduto' => 'Notebook', 'preco' => 2500 , 'quantidade' => 1 ] 
]; 


foreach ($pedidos as $pedido => $valor){
    echo "<b>Produto: </b>" . "<b>" . $valor['nomeProduto'] . "</b>" . "<br>";
    $calcular = calcularPedido($valor['nomeProduto'], $valor['preco'], $valor['quantidade']);
    foreach ($calcular as $topico => $valor2){
        echo $topico . ": " . $valor2 . "<br>";
        
    }
    echo "<br><br><br><hr>";
    
}


?>