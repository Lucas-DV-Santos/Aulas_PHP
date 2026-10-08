<?php

class Aula{
    public string $diciplina;
    public string $professor;
    public int $duracao;
    public int $num_da_sala;
    public string $bloco;
 
    public function exibir_informacoes(){
      echo '<br><br>' . $this->diciplina . '<br>';
      echo $this->professor. '<br>';
      echo $this->duracao . '<br>';
      echo $this->num_da_sala . '<br>';
      echo $this->bloco . '<br>';
    }

    public function trocar_professor($lecionador){
        $this->professor = $lecionador;
        echo '<br>Novo professor para a aula de ' . $this->diciplina . ': ' . $this->professor;
    }

    public function alterarLocal($n_sala, $blocoLoc){
        $this->num_da_sala = $n_sala;
        $this->bloco = $blocoLoc;

        echo '<br>Novo número de sala para a aula de ' . $this->diciplina . ': ' . $this->num_da_sala;
        echo '<br>Mudança do bloco para a aula ' . $this->diciplina . ': ' . $this->bloco;

    }

    
}


$aula = new Aula();

$aula->professor = 'Carlos';
$aula->diciplina = 'Matemática';
$aula->duracao = '6';
$aula->num_da_sala = '3';
$aula->bloco = 'B';

$aula-> exibir_informacoes();
$aula-> trocar_professor('José');
$aula-> exibir_informacoes();
$aula-> alterarLocal(2 , 'A');
$aula-> exibir_informacoes();
?>