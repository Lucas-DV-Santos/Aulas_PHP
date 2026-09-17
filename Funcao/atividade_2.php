<?php

function calcularPrecoFinal($preco, $quant, $percent){
    $precoF = (($preco * $quant) - (($preco * $quant) * ($percent / 100)));
    return "Preço: $preco <br>
            Quantidade: $quant <br>
            Percentual de desconto: $percent <br>
            Preço final: $precoF";
}

$resultado = calcularPrecoFinal(20, 5, 10);
echo $resultado;
?>