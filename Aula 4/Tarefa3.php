<?php

$num = 0;
$num2 = 3;
echo "As operações disponíveis são: <br>
1:  *<br>
2:  /<br> 
3:  +<br>
4:  -";

$op = 2;

echo "<br><br>Primeiro Número = $num<br> 
      Segundo Número = $num2<br>";

switch($op){

    case 1: 
        echo "A operação é: *";
        echo "<br><br>O resultado é: ". ($num * $num2);
        break;

    case 2: 
        echo "A operação é: /";
        if ($num == 0 || $num2 == 0){
            echo '<p style="font-style: italic; ">Divisão por zero não é possível</p>';
            break;
        }
        else{
            echo "O resultado é: ". (($num / $num2));
            break;
        }

    case 3: 
        echo "A operação é: +";
        echo "<br><br>O resultado é: ". ($num + $num2);
        break;

    case 4: 
        echo "A operação é: -";
        echo "<br><br>O resultado é: ". ($num - $num2);
        break;

}


?>