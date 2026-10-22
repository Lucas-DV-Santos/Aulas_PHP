<?php

class Veiculo{
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function apresentarVeiculo(){
        return $this->marca;

    }
    public function GetAno(){
        return $this->ano;
    }
}



?>