<?php

$dados = [

    [
        "nome" => $_POST["Nome1"],
        "cargo" => $_POST["Cargo1"],
        "salario" => (float)$_POST["Sal1"]
     
        
    ],
    [
        "nome" => $_POST["Nome2"],
        "cargo" => $_POST["Cargo2"],
        "salario" => (float)$_POST["Sal2"]
    
    ],
    [
        "nome" => $_POST["Nome3"],
        "cargo" => $_POST["Cargo3"],
        "salario" => (float)$_POST["Sal3"]
    ],
    [
        "nome" => $_POST["Nome4"],
        "cargo" => $_POST["Cargo4"],
        "salario" => (float)$_POST["Sal4"]
    ],
    [
         "nome" => $_POST["Nome5"],
        "cargo" => $_POST["Cargo5"],
        "salario" => (float)$_POST["Sal5"]
    ]
    ];


    $soma = 0;
    foreach ($dados as $dado) {

    echo $dado['nome'] . ' - ' . $dado['cargo'] . ' - ' . $dado['salario'] . "<br>";
    $soma = $soma + $dado['salario'];

   
    }
    echo "Funcionários que ganham acima de 3000: <br><br>";

    foreach ($dados as $func){
        if ($func['salario'] > 3000){
            echo $func['nome'] . " Ganha R$" . $func['salario'] . "<br>";
        }
    }   

    $media = $soma/5;
    echo "A soma dos salários é: $soma";
    echo "<br>A média dos salários é: $media";

    echo "</table>";



    
        
    
?>