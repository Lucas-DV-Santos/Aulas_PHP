<?php

$array =    [ $_POST["dia1"], 
    $_POST["dia2"], 
    $_POST["dia3"], 
    $_POST["dia4"], 
    $_POST["dia5"], 
    $_POST["dia6"], 
    $_POST["dia7"]

];

foreach ($array as $per){

    echo str_repeat("-", 50);
    echo "<br> $per <br>";
    echo str_repeat("-", 50);
}

?>