<?php

class Publicacao{
    protected string $titulo;
    private int $AnoDePublicacao;

    public function __construct($titulo, $AnoDePublicacao){
        $this->titulo = $titulo;
        $this->AnoDePublicacao = $AnoDePublicacao;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnoDePublicacao(){
        return $this->AnoDePublicacao;
    }
}




?>