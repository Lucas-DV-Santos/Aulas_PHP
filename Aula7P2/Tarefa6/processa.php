<?php

$dados = [

    [
        "nome" => $_POST["nome1"],
        "nota1" => (float)$_POST["nota11"],
        "nota2" => (float)$_POST["nota12"],
        "nota3" => (float)$_POST["nota13"]
        
    ],
    [
        "nome" => $_POST["nome2"],
        "nota1" => (float)$_POST["nota21"],
        "nota2" => (float)$_POST["nota22"],
        "nota3" => (float)$_POST["nota23"]
    ],
    [
        "nome" => $_POST["nome3"],
        "nota1" => (float)$_POST["nota31"],
        "nota2" => (float)$_POST["nota32"],
        "nota3" => (float)$_POST["nota33"]
    ],
    [
        "nome" => $_POST["nome4"],
        "nota1" => (float)$_POST["nota41"],
        "nota2" => (float)$_POST["nota42"],
        "nota3" =>(float)$_POST["nota43"]
    ],
    [
        "nome" => $_POST["nome5"],
        "nota1" => (float)$_POST["nota51"],
        "nota2" => (float)$_POST["nota52"],
        "nota3" => (float)$_POST["nota53"]
    ]
    ];

     echo " <table border='1'>
    <tr>
        <th>Aluno</th>
        <th>Nota1</th>
        <th>Nota2</th>
        <th>Nota3</th>
        <th>Média</th>
        <th>Situação</th>
    </tr>"; 

$contador = 0;

    foreach ($dados as $dado) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($dado['nome']) . "</td>";
    echo "<td>" . htmlspecialchars($dado['nota1']) . "</td>";
    echo "<td>" . htmlspecialchars($dado['nota2']) . "</td>";
    echo "<td>" . htmlspecialchars($dado['nota3']) . "</td>";
    echo "<td>" . number_format((($dado['nota1'] + $dado['nota2'] + $dado['nota3']) / 3),1) . "</td>";

    $media = number_format((($dado['nota1'] + $dado['nota2'] + $dado['nota3']) / 3), 1);

    if ($media < 7){
        echo "<td>Reprovado</td>";
    }   
    elseif($media >= 7){
        echo "<td>Aprovado</td>";
        $contador++;
    }
    echo "</tr>";

    
    }
    echo "<br><br> No total $contador foram aprovados.";
    echo "</table>";

    
?>