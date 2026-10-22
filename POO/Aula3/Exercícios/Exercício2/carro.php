<?php
require_once 'veiculo.php';
class carro extends Veiculo{
    private int $quantidadePortas;

    public function __construct($marca, $ano, $quantidadePortas){
        parent::__construct($marca, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function MostrarCarro(){
        echo '<h1>Carro:</h1>';
        echo 'Nome: ' . $this->apresentarVeiculo(). '<br>';
        echo 'Ano: ' . $this->GetAno() . '<br>';
        echo 'Portas: '.$this->quantidadePortas . '<br>';
    }
}



?>