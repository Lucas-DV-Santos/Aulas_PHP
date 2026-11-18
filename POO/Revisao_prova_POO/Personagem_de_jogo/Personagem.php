<?php

Class Personagem{
    private string $nome;
    private int $vida;

    public function __construct(string $nome, int $vida){
        $this->nome = $nome;
        $this->vida = $vida;
    }

    public function tirarVida(int $dano){
        if($dano > 0){
            if ($this->vida > $dano){
            $this->vida = $this->vida - $dano;
            echo "<br>Dano Recebido: " . $dano . "<br>";
            }else{
                echo "<br>Impossível retirar o Dano... Vida insuficiente..." . "<br>";
            }
        }else{
            echo "<br>Dano deve ser maior que 0<br>";
        }
    }

    public function aumentarVida(int $saude){
        if($saude > 0){
            $this->vida = $this->vida + $saude;
            echo "<br>Vida Recebida: " . $saude . "<br>";
            }else{
                echo "<br>Saúde recebida deve ser maior que 0<br>";
            }
    }

    public function getVida(){
        echo "<br>Vida Atual: {$this->vida}<br>";
    }
}

$personagem = new Personagem("Lucas", 500);
$personagem->getVida();
$personagem->tirarVida(0);
$personagem->getVida();
$personagem->aumentarVida(0);
$personagem->getVida();



?>