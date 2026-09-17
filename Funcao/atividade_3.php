<?php

function analisarNúmero($num){
    $dobro = $num * 2;
    $triplo = $num * 3;
    $quadrado = $num**2; 
    $PosNeg = "";
    if ($num >= 0){
        $PosNeg = "Positivo";
    }else{
        $PosNeg = "Negativo";
    }

    return "Número: $num <br>
            Dobro: $dobro <br>
            Triplo: $triplo <br>
            Quadrado: $quadrado <br>
            Situação: $PosNeg";
}


$analisar = analisarNúmero(25);
echo $analisar;
?>