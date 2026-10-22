<?php

class Produto{
     protected string $nome;

     private string $preco;

     public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
     }

     public function getPreco(){
        return $this->preco;
     }

     public function MostrarProduto(){
        echo 'Nome: ' . $this->nome .'<br>';
        echo 'Preço: '. $this->preco .'<br>';
    }
}

?>