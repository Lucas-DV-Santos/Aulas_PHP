<?php

$dados = [

    [
        "nome" => $_POST["nome1"],
        "categoria" => $_POST["cat1"],
        "preco" => (float)$_POST["prec1"]
        
    ],
    [
        "nome" => $_POST["nome2"],
        "categoria" => $_POST["cat2"],
        "preco" => (float)$_POST["prec2"]
    ],
    [
        "nome" => $_POST["nome3"],
        "categoria" => $_POST["cat3"],
        "preco" => (float)$_POST["prec3"]
    ],
    [
        "nome" => $_POST["nome4"],
        "categoria" => $_POST["cat4"],
        "preco" => (float)$_POST["prec4"]
    ],
    [
        "nome" => $_POST["nome5"],
        "categoria" => $_POST["cat5"],
        "preco" => (float)$_POST["prec5"]
    ],
    [
        "nome" => $_POST["nome6"],
        "categoria" => $_POST["cat6"],
        "preco" => (float)$_POST["prec6"]
    ]
    ];

     echo " <table border='1'>
    <tr>
        <th>Nome</th>
        <th>Categoria</th>
        <th>Preço</th>
        <th>Desconto</th>
        <th>Preço final</th>
        
    </tr>"; 


    foreach ($dados as $dado) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($dado['nome']) . "</td>";
    echo "<td>" . htmlspecialchars($dado['categoria']) . "</td>";
    echo "<td>" . htmlspecialchars($dado['preco']) . "</td>";

    if(($dado['preco']) > 200){
        echo "<td>" . "10%" . "</td>";
        echo "<td>" . number_format((htmlspecialchars($dado['preco']) - ($dado['preco'] * 0.1)),2) . "</td>"; 
    }

    elseif(($dado['preco']) > 100  && ($dado['preco']) < 200){
        echo "<td>" . "5%" . "</td>";
        echo "<td>" . number_format((htmlspecialchars($dado['preco']) - ($dado['preco'] * 0.05)),2) . "</td>";
    }
    elseif(($dado['preco']) < 100){
        echo "<td>" . "Sem desconto" . "</td>";
        echo "<td>" . $dado['preco'] . "</td>";
    }


    
    }

    echo "</table>";

    
?>