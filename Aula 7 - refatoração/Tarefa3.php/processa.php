<?php

$num = $_POST["v1"];
$num2 = $_POST["v2"];
$op = $_POST["op"];

echo "<br><br>Primeiro Número = $num<br> 
      Segundo Número = $num2<br><br>";

switch($op){

    case "*": 
        echo "A operação é: *";
        echo "<br><br>O resultado é: ". ($num * $num2);
        break;

    case "/": 
        echo "A operação é: /<br>";
        if ($num == 0 || $num2 == 0){
            echo '<p style="font-style: italic; ">Divisão por zero não é possível</p>';
            break;
        }
        else{
            echo "O resultado é: ". (($num / $num2));
            break;
        }

    case "+": 
        echo "A operação é: +";
        echo "<br><br>O resultado é: ". ($num + $num2);
        break;

    case "-": 
        echo "A operação é: -";
        echo "<br><br>O resultado é: ". ($num - $num2);
        break;

}


?>