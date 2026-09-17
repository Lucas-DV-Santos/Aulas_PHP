<?php

$aluno = [
    "Nome" => "Carlos Silva",
    "Idade" => 22,
    "Curso" => "Sistemas de Informação",
    "Nota" => 8.5,
];

foreach ($aluno as $chave => $valor){
    echo "$chave: $valor<br>";
}

?>