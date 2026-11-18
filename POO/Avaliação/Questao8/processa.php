<?php

require_once ("Pagamento.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$forma_pagamento = $_POST['forma_pagamento'];

if($preco > 0){
    if($forma_pagamento == 'pix'){
        $pagamento = new Pix($preco);
    }elseif($forma_pagamento == 'cartao'){
       $pagamento = new Cartao($preco);
    }elseif($forma_pagamento == 'boleto'){
       $pagamento = new Boleto($preco);
    }
} else{
    echo 'Valor de compra deve ser maior que 0<br>';
    echo '<a href="index.html">Voltar para página de consulta</a>';
    exit();
}


echo 'Nome: ' . $nome . '<br>'
    . 'Valor Original: ' . $pagamento->getValor() . '<br>'
    . 'Valor Final: ' . $pagamento->calcularValor() . '<br>'
    . 'Forma de pagamento: ' . $forma_pagamento;

if($forma_pagamento == 'pix'){
    echo'<br>Desconto: 10%<br><br>';
}elseif($forma_pagamento == 'cartao'){
    echo'<br>Acréscimo: 5%<br><br>';
}elseif($forma_pagamento == 'boleto'){
    echo'<br>Desconto: Nenhum<br><br>';
}

echo '<a href="index.html">Voltar para página de consulta</a>';
?>