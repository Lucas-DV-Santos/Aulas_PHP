<?php
     $arr = [    
    'nome' => 'Lucas', 
    'idade' => '16', 
    'time' => 'Santos',
    'profissão' => 'Estudante'];

     echo "Olá $arr[nome], você tem $arr[idade] anos e torce para o $arr[time]";
     echo "<br>";


     if ($arr['idade'] >= 18){
        echo "você é maior de idade";}
     else{
        echo "você é menor de idade";}
?>