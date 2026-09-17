<?php

require_once 'funcao.php';

$Nome = "Arroz";
$Valor = 10;
$Quantidade = 5;
$Desconto = 10;
$Imposto = 100;

$calcular = calcularPedido($Nome, $Valor, $Quantidade, $Desconto, $Imposto);

foreach($calcular as $topico => $res){
    echo $topico . ": " . $res . "<br>";
}

?>