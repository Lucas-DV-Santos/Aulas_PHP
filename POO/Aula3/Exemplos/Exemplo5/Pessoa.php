<?php

class Pessoa{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function GetIdade(){
        return $this->idade ;
    }

    public function ExibirNomeIdade(){
        echo 'Nome: ' . $this->nome .'<br>';
        echo 'Idade: '. $this->idade .'<br>';
        
    }
}


?>