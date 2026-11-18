<?php

require_once("Corrida.php");

$nome = $_POST["nome"];
$distancia = $_POST["distancia"];
$tempo = $_POST["tempo"];

if ($distancia <= 0 OR $tempo <= 0) {
    echo "Distância e Tempo não podem ser 0";
}


$corrida = new Corrida($nome, $distancia, $tempo);
echo $corrida->getAtleta(). '<br>';
echo 'Distância: '.  $corrida->getDistancia(). '<br>';
echo 'Tempo: ' . $corrida->getTempo(). '<br>';
echo 'Velocidade Média: '. $corrida->calcularVelocidade() ."Km/h<br>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php"><br>Voltar para a página de cálculo</a>
</body>
</html>