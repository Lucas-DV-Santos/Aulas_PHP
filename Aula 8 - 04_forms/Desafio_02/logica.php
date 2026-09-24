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

    $valorFinal = 0;
    $desconto = 0;
    $valorBruto = 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
    <header>
        <h1>Resumo da Compra</h1>
        
    </header>
    <main>
        <p>Cliente: <?=$nome?></p>
        <table border="1" style="width: 30%">
  <thead>
    <tr>
      <th colspan="4" style="background-color: lightgray">Compras</th>
    </tr>
    <tr style="background-color: beige">
      <th>Produto</th>
      <th>Preço</th>
      <th>Quantidade</th>
    </tr>
  </thead>
  <tbody>

    <?php
    foreach($carrinho as $valor){
        echo '<tr>';
        echo '<td style="text-align:center">' . $valor['produto'] . '</td>';
        echo '<td style="text-align:center">' . $valor['preco'] . '</td>';
        echo '<td style="text-align:center">' . $valor['quantidade'] . '</td>';
        echo '</tr>';
        $valorBruto += $valor['preco'] * $valor['quantidade'];
    }
    ?>

  </tbody>
</table>
    </main>
</body>
</html>

<?php
  if ($valorBruto > 500){
        $valorFinal = $valorBruto* 0.90;
        echo '<br><br>' . 'Desconto de 10% aplicado';
        $desconto = $valorBruto * 0.10;
    } else{
        $valorFinal = $valorBruto;
        echo '<br><br>' . 'Nenhum desconto aplicado';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    <p><b>Valor Bruto: R$</b><?=number_format($valorBruto, 2)?></p>
    <p><b>Desconto: R$</b><?=number_format($desconto, 2)?></p>
    <p><b>Valor Total: R$</b><?=number_format($valorFinal, 2)?></p>
    <h2>Origado pela compra!!</h2>
</body>
</html>