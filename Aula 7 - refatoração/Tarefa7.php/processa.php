<?php


for ($i = $_POST["num"]; $i <= 30; $i++) {

    echo $i . "<br>";

    if ($i == 12) {
        break;
    }
}

?>