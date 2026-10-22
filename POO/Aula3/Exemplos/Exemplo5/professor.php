<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private string $diciplina;

    public function __construct($nome, $idade, $diciplina){
        parent::__construct($nome, $idade);
        $this->diciplina = $diciplina;
    }
    public function apresentar(){
        echo $this->ExibirNomeIdade() .'Diciplina: ' . $this->diciplina;
    }
}



?>