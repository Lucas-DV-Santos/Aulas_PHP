<?php

Class Carro{
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanque = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanque;
    }
    public function abastecer($litros){
        if ($litros < 0){
            echo '<br>Valor inválido';
        }else{
            echo '<br><br>Abastecendo...<br>Quantidade abastecida: ' . $litros .'L<br>' ;
            $this->tanque += $litros;
        }
    }
    public function dirigir($distancia){
        echo '<br><br   >Litros de combustível nescessários para concluir a viagem: ' . ($distancia / $this->consumo) .'<br>';
        if (($distancia / $this->consumo) > $this->tanque){
            echo '<br>Impossível percorrer a distância<br>';
        }else{
            'Corrida concluída...';
            $this->tanque -= ($distancia/$this->consumo);
        }
    }
    public function exibir(){
        echo '<br>Modelo: ' . $this->modelo . '<br>Consumo: ' . $this->consumo . 'Km/L' . '<br>Tanque: ' . $this->tanque . 'L';
    }
}

$carro = new Carro('Chevette', 10, 60);
$carro->exibir();
$carro->dirigir(50);
$carro->exibir();
$carro->abastecer(10);
$carro->exibir();


?>