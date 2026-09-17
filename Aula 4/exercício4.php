<?php

$cardapio = [
"Frango grelhado" => 32.90,
"Salada" => 24.50,
"Suco de Laranja" => 9.90,
"Pudim" => 12.00,
];

echo "<h2>Itens do Cardápio<br></h2>";

foreach ($cardapio as $prato => $valor ){
    echo "$prato - R$".number_format($valor, 2)."<br>";
}

?>