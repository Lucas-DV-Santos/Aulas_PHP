<?php

Abstract Class Irrigacao{
    public float $area;

    public function __construct($area){
        $this->area = $area;
    }

    Abstract public function calcularConsumo();

}

Class Gotejamento extends Irrigacao{

    public function __construct($area){
        parent::__construct($area); 
    }
    public function calcularConsumo(){
        echo "<br>Consumo:" . $this->area * 5 . "L<br>";
    }
}

Class Aspersao extends Irrigacao{

    public function __construct($area){
        parent::__construct($area); 
    }

    public function calcularConsumo(){
        echo "<br>Consumo:" . $this->area * 8 . "L<br>";
    }
}

$gotejamento = new Gotejamento(100);
$gotejamento->calcularConsumo();

$aspersao = new Aspersao(100);
$aspersao->calcularConsumo();

?>