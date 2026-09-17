<?php

$peso = 120;
$altura = 2;
$calculo = $peso / ($altura**2);

if($calculo < 20){echo "Subpeso<br>";

    }elseif($calculo  <= 25){echo "Normal<br>";

        }else{echo "sobrepeso<br>";}

echo "Seu IMC é: " . number_format($calculo, 2) . "<br>";

?>