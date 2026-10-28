<?php
require_once 'produto.php';
class Produto_Fisico extends Produto{

    private int $peso;

    public function __construct($nome, $preco, $peso){
        parent::__construct($nome, $preco);
        $this->peso = $peso;
    }

    public function mostrarPeso(){
        echo"Peso do produto: " . $this->peso . 'Kg<br>';
    }

    public function Mostrar_Produto_Físico(){
        $this->MostrarProduto();
        $this->mostrarPeso();
    }

    
}


?>