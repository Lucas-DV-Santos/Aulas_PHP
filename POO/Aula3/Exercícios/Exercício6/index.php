<?php

require_once 'produto_digital.php';
require_once 'produto_físico.php';

$produtoF = new Produto_Fisico('Computador', 3500, 1);
$produtoF-> mostrarPeso();
$produtoF-> Mostrar_Produto_Físico();

echo'<br>';

$produtoD = new Produto_Digital('Jogo', 350, 56);
$produtoD->mostrarTamanho();
$produtoD->Mostrar_Produto_Digital()



?>