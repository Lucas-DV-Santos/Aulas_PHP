<?php

require_once 'carro.php';
require_once 'moto.php';

$carro = new Carro('Astra', 2007, 4);
$carro->MostrarCarro();

$moto = new Moto('Mobilete', 2011, 984);
$moto->MostrarMoto();

?>