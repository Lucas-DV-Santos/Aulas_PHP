<?php
$dados =[
    [
        "nome" => $_POST['nome1'],
        "produto" => $_POST['produto1'],
        "quant" => (float)$_POST['quant1'],
        "val" => (float)$_POST['val1']
    ],
    [
        "nome" => $_POST['nome2'],
        "produto" => $_POST['produto2'],
        "quant" => (float)$_POST['quant2'],
        "val" => (float)$_POST['val2']
    ],
    [
        "nome" => $_POST['nome3'],
        "produto" => $_POST['produto3'],
        "quant" => (float)$_POST['quant3'],
        "val" => (float)$_POST['val3']
    ],
    [
        "nome" => $_POST['nome4'],
        "produto" => $_POST['produto4'],
        "quant" => (float)$_POST['quant4'],
        "val" => (float)$_POST['val4']
    ],
    [
        "nome" => $_POST['nome5'],
        "produto" => $_POST['produto5'],
        "quant" => (float)$_POST['quant5'],
        "val" => (float)$_POST['val5']
    ]
    ];
    $valorT = [];
    $quantidade = 0;

echo "<table border='1'>
        <th>Nome do vendedor</th>
        <th>Produto</th>
        <th>Quantidade Vendida</th>
        <th>Valor unitário</th>
        <th>Valor Total</th>";

foreach ($dados as $dado){
    echo "<tr>";
    echo "<td>" . $dado['nome'] . "</td>";
    echo "<td>" . $dado['produto'] . "</td>";
    echo "<td>" . $dado['quant'] . "</td>";
    echo "<td>" . $dado['val'] . "</td>";
    echo "<td>" . (($dado['quant'] * $dado['val'])) .  "</td>";
    
    array_push($valorT, (($dado['quant'])* ($dado['val'])));
    $quantidade = $quantidade + ($dado['quant']) ;

}

echo "</table>";
$cont = 0;
echo "<br><br>Quantidade de produtos vendidos: ";
echo $quantidade;
echo "<br><br>O maior valor é: ";
echo max($valorT);
echo "<br><br>O valor total vendido foi de: ";
foreach ($valorT as $valo){
    $cont = $cont + $valo;
}
echo $cont

?>