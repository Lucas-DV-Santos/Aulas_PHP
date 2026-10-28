<?php

class Carro{
    public function Acelerar(){
        echo '<br>O carro está acelerando...<br>';
    }
}

class Carro_Combustao extends Carro{
    public function Acelerar(){
        echo '<br>Injetando Combustível...<br>';
    }
}

class Carro_eletrico extends Carro{
    public function Acelerar(){
        echo '<br>Injetando Eletrecidade...<br>';
    }
}

$carro = new Carro();
$carro->Acelerar();

$carro1 = new Carro_Combustao();
$carro1->Acelerar();

$carro2 = new Carro_eletrico();
$carro2->Acelerar();
?>