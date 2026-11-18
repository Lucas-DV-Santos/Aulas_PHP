<?php

Class SessaoCinema {

    public string $filme;
    public string $horario;
    public int $sala;


    public function __construct(string $filme, string $horario, int $sala){
        $this->filme = $filme;
        $this->horario = $horario;
        $this->sala = $sala;
    }

    public function exibirSessao(){
        echo"Filme: " . $this->filme . "<br>Horário: ". $this->horario. "<br>Sala: ". $this->sala . '<br><br>';
    }
}


$sessao= new SessaoCinema('Senhor dos Anéis', '19:00', 5);
$sessao->exibirSessao();

$sessao1= new SessaoCinema('Sla', '20:00', 6);
$sessao1->exibirSessao();

$sessao2= new SessaoCinema('Sla2', '21:00', 5);
$sessao2->exibirSessao();




?>