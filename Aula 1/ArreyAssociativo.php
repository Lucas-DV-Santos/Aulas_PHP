<?php

    $arr = ['nome' => 'Romeu', 'patas' => 4, 'cor' => 'Branco e preto'];

    echo $arr['nome'];
    echo "<br>";
    echo $arr['patas'];
    echo "<br>";
    echo $arr['cor'];
    echo "<br>";

    print_r($arr);
    echo "<br>";
    echo "Meu cachorro chama $arr[nome], tem $arr[patas] patas e é $arr[cor]";
?>