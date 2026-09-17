<?php


function calcularPedido($nome, $preco, $quant, $percDesc, $percImp){
    $sub = $preco * $quant;
    $valordesc = ($sub * ($percDesc / 100));
    $valorImp = ($sub * ($percImp / 100));
    $valorFinal = ($sub - $valordesc + $valorImp);

    return [
        'Nome' => $nome,
        'Preço Unitário' => $preco,
        'Quantidade' => $quant,
        'SubTotal' => $sub,
        'Valor de Desconto' => $valordesc,
        'Valor do imposto' => $valorImp,
        'Preço final' => $valorFinal
    ];
}
?>