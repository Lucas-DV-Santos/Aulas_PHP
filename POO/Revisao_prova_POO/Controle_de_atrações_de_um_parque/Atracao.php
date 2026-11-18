<?php

Abstract Class Atracao {
    private string $nome;
    private float $capacidade;

    public function __construct(string $nome,$capacidade){
        $this->nome = $nome;
        $this->capacidade = $capacidade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }

    abstract public function podeEntrar($idade, $altura);
}

Class MontanhaRussa extends Atracao {

    public function __construct(string $nome, $capacidade)
    {
        parent::__construct($nome, $capacidade);
    }

    public function podeEntrar($idade, $altura){
        if ($idade >= 12 AND $altura >= 1.40){
            return "Pode Entrar";
        }else{
            return "Entrada Negada";
        }
    }
}

Class CasaAssombrada extends Atracao {

    public function __construct(string $nome, $capacidade)
    {
        parent::__construct($nome, $capacidade);
    }

    public function podeEntrar($idade, $altura){
        if ($idade >= 10){
            return "Pode Entrar";
        }else{
            return "Entrada Negada";
        }
    }
}

Class RodaGigante extends Atracao {

    public function __construct(string $nome, $capacidade)
    {
        parent::__construct($nome, $capacidade);
    }

    public function podeEntrar($idade, $altura){
        return "Pode Entrar";    
    }
}

$montanhaRussa = new MontanhaRussa("Expresso do Terror", 40);
$casaAssombrada = new CasaAssombrada("Mansão Sombria", 20);
$rodaGigante = new RodaGigante("Panorâmica", 60);

$atracoes = [
    $montanhaRussa,
    $casaAssombrada,
    $rodaGigante
];

$visitantes = [
    ['Nome' => 'Carlos','Idade'=> 15, 'Altura' => '1.80'],
    ['Nome' => 'Lucas','Idade'=> 11, 'Altura' => '1.60'],
    ['Nome' => 'José','Idade'=> 20, 'Altura' => '1.90']
];

foreach ($visitantes as $key => $value) {
    echo 'Nome: ' . $value['Nome'] . ' || ' . 'Idade: ' . $value['Idade'] . ' || ' . 'Altura: ' . $value['Altura'] . '<br>Atrações: <br>' . '<br>';

    foreach($atracoes as $atracao){
        echo "Nome da atração: " . $atracao->getNome() . ' || ';
        echo "<br>Entrada: " . $atracao->podeEntrar($value['Idade'], $value['Altura']) . '<br><br>';
    }
    echo "<br>";
}

?>