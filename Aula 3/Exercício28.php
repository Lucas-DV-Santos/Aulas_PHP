<?php

$x = 4;



while ($x < 30){

    echo "o X é $x <br>";
    if ($x === 24){
        echo "Terminando loop<br>";
        break;
    }

    $x +=2;
}
echo "Loop encerrado";

?>