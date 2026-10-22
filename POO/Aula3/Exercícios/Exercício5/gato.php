<?php
require_once 'animal.php';
class Gato extends Animal {

    private string $cor;
    public function __construct($nome, $idade, $cor) {
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function miar(){
        echo'Miando...';
    }

    public function MostrarGato(){
        echo 'Nome: ' . $this->getNome() . '<br>'
        . 'Idade: ' . $this->getIdade() . '<br>'
        . 'Raça: ' . $this->cor . '<br>';    
    }
    
}


?>