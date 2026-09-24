<?php

function analisarNotas($nota1, $nota2, $nota3){
    $media = number_format(($nota1 + $nota2 + $nota3) / 3, 1);
    $maior = max($nota1, $nota2, $nota3);
    $menor = min($nota1, $nota2, $nota3);
    $situacao = ($media < 7) ? "Reprovado" : "Aprovado";
    
    return [
    'media' => $media, 
    'maior' => $maior, 
    'menor' => $menor, 
    'situacao' => $situacao];
}

$aluno = analisarNotas(10, 7, 8);

foreach ($aluno as $topico => $valor){
    echo $topico . ": " . $valor . "<br>";
}


?>