    <?php

    $idade = 15;
    $pai = True;

    echo "<h1>ENTRADA NO CINEMA<br><br></h1>";

    if ($idade >= 18){
        echo "Entrada liberada";
    }

    elseif($idade > 14 && $idade < 18){
        if($pai == False){
            echo "Entrada Negada, precisa de acompanhante";}
        if($pai == True){
            echo "Entrada Liberada";
    }}
    elseif($idade < 14){
        echo "Entrada negada";
    }

    ?>