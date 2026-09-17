<?php

function calcularPedido($nome, $preco, $quant){
    $sub = $preco * $quant;
    $desc = 0;
    
    if ($sub >= 100 && $sub <= 299){
        $desc = 5;
    }
    elseif ($sub >= 300 && $sub <= 499){
        $desc = 10;
    }
    elseif ($sub >= 500 ){
        $desc = 15;
    }

    $precF = $sub - ($sub * ($desc / 100));
    $ValorDesc = ($sub * ($desc / 100));

    return [
        "Nome" => $nome,
        "Preço unitário" => $preco,
        "Quantidade" => $quant,
        "SubTotal" => $sub,
        "Desconto" => $ValorDesc,
        "Total Final" => $precF

    ];
    
}


?>