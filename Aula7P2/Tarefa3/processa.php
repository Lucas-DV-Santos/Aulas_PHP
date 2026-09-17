<?php

$dados = [
$_POST["nome1"] => $_POST["nota1"],
$_POST["nome2"] => $_POST["nota2"],
$_POST["nome3"] => $_POST["nota3"],
$_POST["nome4"] => $_POST["nota4"],
$_POST["nome5"] => $_POST["nota5"]];

foreach($dados as $nome => $nota){

    echo "O aluno ". $nome . " tirou " . $nota . "<br>";

    if($nota < 7){
        echo "Reprovado<br><br>";
    }
    else{
        echo "Aprovado<br><br>";
    }

}




?>