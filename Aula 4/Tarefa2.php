<?php

echo "1-Nivus, 2-Celta, 3-Gol, 4-Polo<br><br>";
$escolha = 2    ;

switch ($escolha){

case 1:
    echo "Nivus<br>";
    echo "R$ 120.000<br>";
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQorIc9E52n4bgHSJ_PiYq0hsfVImdDcibCmrxzvJ6_VQ&s=10" alt="Descrição da imagem">';
    break;

case 2:
    echo "Celta<br>";
    echo "R$ 60.000<br>";
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiBnCF5z7TIxgbB7uejWrDxJteWB1jt74X0xnHiJPqdg&s=10" alt="Descrição da imagem">';
    break;

case 3:
    echo "Gol<br>";
    echo "R$ 17.000<br>";
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQorIc9E52n4bgHSJ_PiYq0hsfVImdDcibCmrxzvJ6_VQ&s=10" alt="Descrição da imagem">';
    break;

case 4:
    echo "Polo<br>";
    echo "R$ 93.000<br>";
    echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi4nnc9Ewe_FFPk3wFiLBAKWtvtXMDH1rpfiR8zkcVLQ&s=10" alt="Descrição da imagem">';
    break;

default: 
    echo '<p style="color: red;">Não temos essa opção</p>'; 

}
?>

