<?php

class Robo {
    // Atributos privados (encapsulamento)
    private string $nome;
    private int $bateria;
    private int $pontos;


    public function __construct(string $nome) {
        $this->nome = $nome;
        $this->bateria = 100;
        $this->pontos = 0;
    }


    public function executarDesafio(){
        if ($this->bateria >= 20) {
            $this->bateria -= 20;
            $this->pontos += 10;
            echo " <br>{$this->nome} executou um desafio! (+10 pts | Bateria: {$this->bateria}%)\n";
        } else {
            echo " <br>{$this->nome} não tem bateria suficiente ({$this->bateria}%) para executar o desafio.\n";
        }
    }

    public function recarregar() {
        $this->bateria = 100;
        echo "<br>{$this->nome} foi recarregado para 100%!\n";
    }


    public function getNome(){
        return $this->nome;
    }

    public function getBateria(){
        return $this->bateria;
    }

    public function getPontos(){
        return $this->pontos;
    }
}


$robo1 = new Robo("Titan");
$robo2 = new Robo("Volt");
$robo3 = new Robo("Nexus");

$robos = [$robo1, $robo2, $robo3];

echo "--- INÍCIO DA COMPETIÇÃO ---\n\n";


$robo1->executarDesafio();
$robo1->executarDesafio();
$robo1->executarDesafio();

echo "\n";


for ($i = 0; $i < 6; $i++) {
    $robo2->executarDesafio();
}

echo "\n";


for ($i = 0; $i < 4; $i++) {
    $robo3->executarDesafio();
}
$robo3->recarregar();
$robo3->executarDesafio();
$robo3->executarDesafio();

echo "\n<br><br>--- RESULTADO FINAL ---\n<br><br>";
$vencedor = $robos[0];

foreach ($robos as $robo) {
    echo "<br>Robô: {$robo->getNome()} | Pontuação: {$robo->getPontos()} pts | Bateria restante: {$robo->getBateria()}%\n";

    if ($robo->getPontos() > $vencedor->getPontos()) {
        $vencedor = $robo;
    }
}

echo "\n<br>🏆 O grande campeão é o robô {$vencedor->getNome()} com {$vencedor->getPontos()} pontos e {$vencedor->getBateria()}% de bateria!\n";