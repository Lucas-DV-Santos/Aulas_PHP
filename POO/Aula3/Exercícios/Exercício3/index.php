<?php

require_once 'desenvolvedor.php';
require_once 'gerente.php';

$desenvolvedor = new desenvolvedor('Lucas', 9000, 'Python');
$desenvolvedor->ApresentarDesenvolvedor();
echo'<br>';
$gerente = new gerente('Samuel', 18000, 'Tecnologia');
$gerente->ApresentarGerente();


?>