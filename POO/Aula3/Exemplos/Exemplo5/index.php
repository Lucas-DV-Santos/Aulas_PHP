<?php

require_once 'aluno.php';
require_once 'professor.php';

$aluno = new Aluno('Lucas' , 17 , 'DS');
$aluno->ExibirInformacoes();

$prod = new Professor('Samuel' , 23, 'LIMA e BD');
$prod->apresentar();

?>