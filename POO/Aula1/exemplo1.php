<?php

// Criação de classes no PHP
class Carro{
    //Atributos
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $tem_teto_solar;

// Metodos
public function ligar(){
    echo 'O carro ligou...<br>';
}

public function acelerar($velocidade_carro){
    $this -> velocidade = $this -> velocidade + $velocidade_carro;
    echo '<br>O carro acelerou...<br>';
    echo 'Velocidade do carro: ' . $this-> velocidade . 'Km/h';
}

public function frear($frear_carro){
    $this-> velocidade = $this -> velocidade - $frear_carro;
    
    if ($this -> velocidade < 0){
        $this -> velocidade = 0;
    }
    echo  '<br>';
    echo 'O carro freou';
    echo  '<br>';
    echo 'Velocidade do carro: ' . $this->velocidade . 'Km/h';


}      
     
public function desligar(){
    while($this-> velocidade > 0){
        $this -> frear(10);
        echo '<br>';
        }
    echo 'O carro foi desligado...';
    } 
}


// Criação de objeto da classe carro1
$carro1 = new Carro();

// Colocando valores no objeto carro 1
$carro1 -> modelo ='Astra';
$carro1 -> cor ='Preto';
$carro1 -> marca ='Chevrolet';
$carro1 -> velocidade = 0;
$carro1 -> tem_teto_solar = true;


// Criação de objeto da classe carro2
$carro2 = new Carro();

// Colocando valores no objeto carro 2
$carro2 -> modelo ='Chevette';
$carro2 -> cor ='Roxo';
$carro2 -> marca ='Chevrolet';
$carro2 -> velocidade = 0;


echo '<p>Modelo do carro 1: ' . $carro1 -> modelo . '</p>';
echo '<p>Cor do carro 1: ' . $carro1 -> cor . '</p>';
echo '<p>Marca do carro 1: ' . $carro1 -> modelo . '</p>';
echo '<p>Velocidade do carro 1: ' . '<b>'  . $carro1 -> velocidade . '</b>' . '</p>';
echo '<p>Tem teto solar: ' . ($carro1 -> tem_teto_solar ? 'Tem teto solar' : 'Não tem teto solar') . '</p>';
$carro1 -> ligar(); 
echo '<br>';
$carro1 -> acelerar(50);
echo '<br>';
$carro1 -> acelerar(100);
echo  '<br><br  >';
$carro1  -> frear(30);
echo  '<br>';
$carro1 -> desligar();


echo '<br><hr><br>';

echo '<p>Modelo do carro 2: ' . $carro2 -> modelo . '</p>';
echo '<p>Cor do carro 2: ' . $carro2 -> cor . '</p>';
echo '<p>Marca do carro 2: ' . $carro2 -> modelo . '</p>';
echo '<p>Velocidade do carro 2: ' . '<b>'  . $carro1 -> velocidade . '</b>' . '</p>';
echo '<p>Tem teto solar: ' . ($carro2 -> tem_teto_solar ? 'Tem teto solar' : 'Não tem teto solar') . '</p>';
$carro2 -> ligar();
echo '<br>';
$carro2 -> acelerar(80);
echo '<br>';
$carro2 -> acelerar(80);


?>