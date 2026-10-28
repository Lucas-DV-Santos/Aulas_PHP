<?php

abstract class Carro{
    abstract public function acelerar();

}

class Carro_combustivel extends Carro{
    public function acelerar(){
        echo"<br>Injetando Combustível...";
    }
}

class Carro_eletrico extends Carro{
    public function acelerar(){
        echo "<br><br>Enviando Energia";
    }
}

$carro = new Carro_combustivel();
$carro->acelerar();

$carroEletrico = new Carro_eletrico();
$carroEletrico->acelerar();
?>