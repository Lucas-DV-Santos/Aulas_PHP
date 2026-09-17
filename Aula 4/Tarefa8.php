<?php

$arr = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

foreach ($arr as $per){

    echo str_repeat("-", 50);
    echo "<br> $per <br>";
    echo str_repeat("-", 50);
}

?>