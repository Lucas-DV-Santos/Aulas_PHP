<?php

require_once 'gato.php';
require_once 'cachorro.php';

$gato = new Gato('Cluadia', 12, 'Branco');
$gato->MostrarGato();
$gato->miar();
echo '<br>';
echo '<br>';
$cachorro = new Cachorro('Romeu', 6, 'Vira-lata');
$cachorro->MostrarCachorro();
$cachorro->latir();



?>