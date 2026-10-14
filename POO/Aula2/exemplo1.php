<?php

Class Pessoa{
    public string $nome;
    public int $idade;

    public function __construct($valor1, $valor2){
        $this-> nome = $valor1;
        $this-> idade = $valor2;
    }
    
    public function exibirDadosPessoa(){

        echo $this->nome . '<br>';
        echo $this->idade .'<br>';   
    }

    
}


$pessoa = new Pessoa('Lucas', 17);


// $pessoa->nome = 'Lucas';
// $pessoa->idade = 17;

$pessoa -> exibirDadosPessoa();


?>