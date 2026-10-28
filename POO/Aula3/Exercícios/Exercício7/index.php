<?php

require_once 'contaCorrente.php';
require_once 'contaPoupanca.php';

$contaCorrente = new contaCorrente('Lucas', 1000, 4325);
$contaCorrente-> MostrarCartao();
$contaCorrente->Depositar(500);
$contaCorrente->Sacar(200);
$contaCorrente-> MostrarCartao();

echo '<br><br>';

$contaPoupanca = new contaPoupanca('Lucas', 1000, 'Poupar');
$contaPoupanca-> MostrarObjetivo();
$contaPoupanca->Depositar(500);
$contaPoupanca->Sacar(200);
$contaPoupanca-> MostrarObjetivo();

?>