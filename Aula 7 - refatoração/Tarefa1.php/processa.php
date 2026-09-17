
<?php

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$delta = ($b*$b) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta))/(2*$a);
$x2 = (-$b - sqrt($delta))/(2*$a);


echo "O delta é:  $delta<br><br>";
echo "O x1 é: $x1 <br>";
echo "O x2 é: $x2 ";


?>

