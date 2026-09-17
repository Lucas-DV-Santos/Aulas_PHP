<?php

$nota1 = 7;
$nota2 = 7;
$nota3 = 11;

$peso1 = 2;
$peso2 = 3;
$peso3 = 5;

$media = ($nota1 * $peso1 + $nota2 * $peso2 + $nota3 * $peso3) / ($peso1 + $peso2 +
$peso3);

echo "Suas notas foram
<br>Nota 1: $nota1
<br>Nota 2: $nota2
<br>Nota 3: $nota3<br>";

if ($media >= 7){
    $situacao = "Aprovado";
}
elseif($media >= 5 && $media < 7){
    $situacao = "Recuperação";
}
elseif($media < 5){
    $situacao = "Reprovado";
}

echo "Sua média é"." ". ($media) ."<br>";
echo "Sua situação é: $situacao<br>";

if ($media % 2 == 0) {
    echo "Média é par<br>";
}
else{
    echo "Média é impar<br>";
}

echo "Média ao quadrado é " . ($media ** 2). "<br>";

if (!($nota1 <= 10) || !($nota2 <= 10) || !($nota3 <= 10)) { 
    echo "Uma das notas passou de 10"; }

?>