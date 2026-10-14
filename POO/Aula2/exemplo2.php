<?php

Class Produto{
    public string $name;
    public float $preco;
    public string $descricao;

    public function __construct($valor1, $valor2, $valor3 = 'Sem descrição'){
        $this->name = $valor1;
        $this->preco = $valor2;
        $this->descricao = $valor3;
    }
}

$camiseta = new Produto('Camiseta', 50.00);

echo '<pre>';
print_r($camiseta);
echo '</pre>';

$calca = new Produto('Calça', 100.00, 'Jeans');

echo '<pre>';
print_r($calca);
echo '</pre>';


?>