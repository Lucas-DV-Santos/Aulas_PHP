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


    echo '<table border = 1 style="width: 30%;">';
    echo '<tr style="background-color: lightgray">
            <th colspan="3">Carrinho</th>
          </tr>
          <tr style="background-color: beige">
            <th>Produto</th>
            <th>Preço</th>
            <th>Quantidade</th>
         </tr>';
    
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
        $valorFinal += $prodfinal;

    }

    echo '</table>';

    if ($valorFinal > 500){
        $valorFinal = $valorFinal* 0.90;
         echo '<br><br>' . 'Desconto de 10% aplicado';
    }
    echo '<h3>'. '<br><br>' . 'Valor Final da compra: ' . number_format($valorFinal, 2) . '</h3>';
?>