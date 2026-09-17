<form action=# method="post">
    <label>Digite sua idade: </label>
    <input type="number" name="idade">
    <button type="submit">Verificar</button>
</form>

<?php

    $idade = $_POST["idade"];
    if ($idade >= 18){
        echo "Você é maior de idade";
    }
    else{
        echo "Você é menor de idade";
    }
?>
