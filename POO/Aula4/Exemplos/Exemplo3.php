<?php

abstract class Veiculo{
    abstract public function Mover();

    public function Acelerar(){
        echo"<br>Acelerando...";
    }
}

class Carro extends Veiculo{
    public function Mover(){
        echo "O caro está movendo";
    }
}

// $veiculo = new Veiculo();

$carro = new Carro();
$carro->Mover();
$carro->Acelerar();
?>