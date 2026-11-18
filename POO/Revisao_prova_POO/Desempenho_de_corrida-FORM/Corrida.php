<?php

class Corrida
{
    private string $atleta;
    private float $distancia;
    private float $tempo;

    public function __construct(string $atleta, float $distancia, float $tempo)
    {
        $this->atleta = $atleta;
        $this->distancia = $distancia;
        $this->tempo = $tempo;
    }

    public function getAtleta()
    {
        return $this->atleta;
    }

    public function getDistancia()
    {
        return $this->distancia;
    }

    public function getTempo()
    {
        return $this->tempo;
    }

    public function calcularVelocidade()
    {   
        return $this->distancia / $this->tempo;
    }
}


?>