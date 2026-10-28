<?php

abstract class Veiculo{
    protected string $modelo;

    public function __construct($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        echo $this->modelo;
    }

    abstract public function mover();
}

class Carro extends Veiculo{
    public string $cor;
    

    public function __construct($modelo, $cor){
        parent::__construct($modelo);
        $this->cor = $cor;
    }

    public function mover(){
        echo 'O carro está movendo...<br>';
    }

    public function getModelo(){
        echo $this->modelo . '<br>';
    }

    public function getCor(){
        echo $this->cor . '<br>';
    }
}

$carro = new Carro('Astra', 'Preto');
$carro->mover();
$carro->getModelo();
$carro->getCor();
?>