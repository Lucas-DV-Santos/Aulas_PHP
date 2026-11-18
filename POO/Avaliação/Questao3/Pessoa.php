<?php

Class Pessoa{
public string $nome;
public int $idade;

public function __construct($nome, $idade)
{
   $this->nome =$nome;
   $this->idade=$idade;
}

public function exibirDados(){
    echo "<br>Nome: " . $this->nome . '<br>' . 'Idade: ' . $this->idade;
    }
}

Class Aluno extends Pessoa{

    public string $curso;

    public function __construct($nome, $idade, $curso)
    {
        parent::__construct($nome, $idade);
        $this->curso = $curso;
    }

    public function exibirDados(){
       parent::exibirDados();
       echo "<br>Curso: " . $this->curso;
    }
}

$aluno1 = new Aluno('Lucas', 17, 'TDS');
$aluno1->exibirDados();
echo'<br>';
$aluno2 = new Aluno('José', 19, 'Matemática');
$aluno2->exibirDados();
?>