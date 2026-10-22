<?php
require_once 'veiculo.php';
class Moto extends Veiculo{
    private int $cilindradas;

    public function __construct($marca, $ano, $cilindradas){
        parent::__construct($marca, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function MostrarMoto(){
        echo '<h1>Moto:</h1>';
        echo 'Nome: ' . $this->apresentarVeiculo(). '<br>';
        echo 'Ano: ' . $this->GetAno() . '<br>';
        echo 'Cilindradas: '.$this->cilindradas . '<br>';
    }
}



?>