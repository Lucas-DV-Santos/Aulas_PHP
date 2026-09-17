<?php

function verificar($idade){
    if ($idade >= 18){
        return "Idade $idade - Maior de idade";
    }else{
        return "Idade $idade - Menor de idade";
    }
};

$resultado = verificar(15);
echo $resultado . "<br>";
$resultado = verificar(14);
echo $resultado . "<br>";
$resultado = verificar(20);
echo $resultado . "<br>";   






?>