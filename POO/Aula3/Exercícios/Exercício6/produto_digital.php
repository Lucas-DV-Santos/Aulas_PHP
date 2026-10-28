<?php
require_once 'produto.php';

class Produto_Digital extends Produto{

    private int $TamanhoArquivo;

    public function __construct($nome, $preco, $TamanhoArquivo){
        parent::__construct($nome, $preco);
        $this->TamanhoArquivo = $TamanhoArquivo;
    }

    public function mostrarTamanho(){
        echo"Peso do produto: " . $this->TamanhoArquivo . 'Gb<br>';
    }

    public function Mostrar_Produto_Digital(){
        $this->MostrarProduto();
        $this->mostrarTamanho();
    }

    
}


?>