<?php

$dados=[$_POST["prod1"] => (float)$_POST["preço1"], 
        $_POST["prod2"] => (float)$_POST["preço2"], 
        $_POST["prod3"] => (float)$_POST["preço3"], 
        $_POST["prod4"] => (float)$_POST["preço4"], 
        $_POST["prod5"] => (float)$_POST["preço5"] ];

echo "<h2>Seus produtos são: </h2><br><br>";

foreach($dados as $prod => $preço){
    echo "$prod.......R$$preço<br>";

}
$maiorValor = max($dados);

$produtoMaisCaro = array_search($maiorValor, $dados);

echo "<br>O produto mais caro é <b>$produtoMaisCaro</b>, custando R$$maiorValor"; 




?>