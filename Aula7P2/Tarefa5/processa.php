<?php

$produtos = [

    [
        "nome" => $_POST["prod1"],
        "preço" => (float)$_POST["preço1"],
        "est" => $_POST["est1"]
    ],
    [
        "nome" => $_POST["prod2"],
        "preço" => (float)$_POST["preço2"],
        "est" => $_POST["est2"]
    ],
    [
        "nome" => $_POST["prod3"],
        "preço" => (float)$_POST["preço3"],
        "est" => $_POST["est3"]
    ],
    [
        "nome" => $_POST["prod4"],
        "preço" => (float)$_POST["preço4"],
        "est" => $_POST["est4"]
    ],
    [
        "nome" => $_POST["prod5"],
        "preço" => (float)$_POST["preço5"],
        "est" => $_POST["est5"]
    ]
    ];

     echo " <table border='1'>
    <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Estoque</th>
        <th>Status</th>
    </tr>"; 


    foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($produto['nome']) . "</td>";
    echo "<td>" . htmlspecialchars($produto['preço']) . "</td>";
    echo "<td>" . htmlspecialchars($produto['est']) . "</td>";

    if($produto['est'] == 0){
        echo "<td>Indisponível</td>";
    }
    elseif($produto['est'] > 0){
        echo "<td>Disponível</td>";
    }
    echo "</tr>";

    
    }

    echo "</table>";

    
?>