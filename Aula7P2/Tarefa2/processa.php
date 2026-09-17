<?php

$dados = [
$_POST["nome1"] => $_POST["idade1"],
$_POST["nome2"] => $_POST["idade2"],
$_POST["nome3"] => $_POST["idade3"],
$_POST["nome4"] => $_POST["idade4"],
$_POST["nome5"] => $_POST["idade5"]];

foreach($dados as $nome => $idade){

    echo $nome . " tem " . $idade . " anos.<br> ";

    if($idade < 18){
        echo "Menor de idade<br><br>";
    }
    else{
        echo "Maior de idade<br><br>";
    }

}




?>