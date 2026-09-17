<?php
$produtos = [
["nome" => "Notebook", "Preço" => 3200, "estoque" =>5],
["nome" => "Mouse", "Preço" => 120, "estoque" =>30],
["nome" => "Teclado", "Preço" => 250, "estoque" =>15]
];

foreach ($produtos as $produto){
    echo "Produto: {$produto['nome'] } | ";
    echo "Preço: R$ {$produto['Preço'] } | ";
    echo "Estoque: {$produto['estoque'] } | <br>";
}


?>