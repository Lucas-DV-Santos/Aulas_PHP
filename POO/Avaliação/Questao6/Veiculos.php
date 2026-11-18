<?php

abstract CLass Veiculos{

    private string $modelo;
    private float  $AluguelDiaria;

    public function __construct($modelo, $AluguelDiaria)
    {
        $this->modelo = $modelo;
        $this->AluguelDiaria = $AluguelDiaria;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getAlguelDiaria(){
        return $this->AluguelDiaria;
    }

    abstract public function calcularAluguel($dias);
}

Class Carro extends Veiculos{

    public function __construct($modelo, $AluguelDiaria)
    {
        parent::__construct($modelo, $AluguelDiaria);
    }


    public function calcularAluguel($dias)
    {
        if($dias > 0){
            return ($this->getAlguelDiaria() * $dias) + 50  ;
        }else{
            return 'O valor de dias deve ser maior que 0';
        }
    }
}

Class Moto extends Veiculos{

    public function __construct($modelo, $AluguelDiaria)
    {
        parent::__construct($modelo, $AluguelDiaria);
    }

   

    public function calcularAluguel($dias)
    {
        if($dias > 0){
            return ($this->getAlguelDiaria() * $dias) * 0.90;
        }else{
            return 'O valor de dias deve ser maior que 0';
        }
    }
}

$carro1 = new Carro('Astra', 150);


$carro2 = new Carro('Astra2', 100);

$moto1 = new Moto('Ninja', 100);

$veiculos = [
    ['Objeto' => $carro1, 'Tipo' => 'Carro'] ,
    ['Objeto' => $carro2, 'Tipo' => 'Carro'],
    ['Objeto' => $moto1, 'Tipo' => 'Moto']
];

$soma = 0;

foreach($veiculos as $veiculo => $valor){
    $soma += $valor['Objeto']->calcularAluguel(1);

    echo 'Modelo: ' . $valor['Objeto']->getModelo() . '<br>' 
    . 'Tipo: ' . $valor['Tipo'] . '<br>' 
    . 'Valor Aluguel: ' . $valor['Objeto']->getAlguelDiaria() . '<br>'
    . 'Valor final: ' . $valor['Objeto']->calcularAluguel(1) .'<br><br>';
}

echo 'Soma dos valores: ' . $soma
?>