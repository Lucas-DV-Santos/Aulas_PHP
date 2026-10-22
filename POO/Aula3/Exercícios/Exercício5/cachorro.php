<?php
require_once 'animal.php';
class Cachorro extends Animal{

    private string $raca;

    public function __construct($nome, $idade, $raca){
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function latir(){
        echo'Latindo...';
    }

    public function MostrarCachorro(){
        echo 'Nome: ' . $this->getNome() . '<br>'
        . 'Idade: ' . $this->getIdade() . '<br>'
        . 'Raça: ' . $this->raca . '<br>';    
    }

}


?>