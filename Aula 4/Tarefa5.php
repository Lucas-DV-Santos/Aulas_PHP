<?php

$cont = 1;

echo "Contador muito útil de 1 até 30 <br><br>";
echo str_repeat("-", 150);
echo "<br>";
while($cont <= 29){
    echo $cont . "-";
    $cont ++;
}
if ($cont == 30){
    echo "$cont";
    echo "<br>";
}
echo str_repeat("-", 150);

?>