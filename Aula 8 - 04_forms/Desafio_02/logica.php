<?php
$nome = $_POST['nome'];
$carrinho = [
    [
    'produto' => $_POST['produto1'], 
    'preco' => $_POST['preco1'], 
    'quantidade' => $_POST['quant1']
    ],

    [
    'produto' => $_POST['produto2'], 
    'preco' => $_POST['preco2'], 
    'quantidade' => $_POST['quant2']
    ],

    [
    'produto' => $_POST['produto3'], 
    'preco' => $_POST['preco3'], 
    'quantidade' => $_POST['quant3']
    ]
    ];

    $prodfinal = 0;
    $soma = 0;
    $valorFinal = 0;
    $desconto = 0;
    $valorBruto = 0;


    echo '<table border = 1 style="width: 30%;">';
    echo '<tr style="background-color: lightgray">';
    echo    '<th colspan="4">Carrinho</th>';
    echo '</tr>';
    echo '<tr style="background-color: beige">';
    echo     '<th rowspan="4">' . $nome . '</th>';
    echo     '<th>Produto</th>';
    echo     '<th>Preço</th>';
    echo     '<th>Quantidade</th>';
    echo '</tr>';
    
    foreach ($carrinho as $valor){
        echo '<tr style="text-align: center">';
            echo '<td>';
                echo $valor['produto'];
            echo '</td>';

            echo '<td>';
                echo $valor['preco'];
            echo '</td>';

            echo '<td>';
                echo $valor['quantidade'];
            echo '</td>';
        echo '</tr>';

        $prodfinal = $valor['preco'] * $valor['quantidade'];
        $valorBruto += $prodfinal;
    }

    echo '</table>';

    
    if ($valorBruto > 500){
        $valorFinal = $valorBruto* 0.90;
         echo '<br><br>' . 'Desconto de 10% aplicado';
        $desconto = $valorBruto * 0.10;
    } else{
        $valorFinal = $valorBruto;
        echo '<br><br>' . 'Nenhum desconto aplicado';
    }
    
    echo '<h3>'. '<br>' . 'Valor Bruto: R$' . number_format($valorBruto, 2) . '</h3>';
    echo '<h3>' . 'Valor do descontos: R$' . number_format($desconto, 2) . '</h3>';
    echo '<h3>' . 'Valor Final da compra: R$' . number_format($valorFinal, 2) . '</h3>';
?>