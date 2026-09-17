<?php

$arr = [5, "Luiz", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô  "];

$x = count($arr);
$y = 0;
echo "$x elementos dentro do array<br>";
while($y < $x){

    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;


}


?>
