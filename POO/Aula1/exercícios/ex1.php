<?php

class Celular{
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $estado;

    public function ligar(){
        echo '<br><br>Celular ligando...';
        $this -> estado = true;
    }
    public function desligar(){
        echo '<br><br>Celular desligando...';
        $this -> estado = false;
    }
    public function usar($consumo){
        if($this -> bateria == 0 ){
        echo '<br><br>Não pode usar, sem bateria...';
    }else{
        echo '<br><br   >Usando celular...';
        $this -> bateria = $this -> bateria - $consumo;
        echo '<br>Bateria atual: ' . $this -> bateria;
     }
    }
    public function carregar($carga){
        if ($this -> bateria < 100){
            $this -> bateria = $this -> bateria + $carga;
            echo '<br><br>Bateria atual: ' . $this -> bateria;
        }
    }
}

$celular = new Celular();

$celular->marca = 'Xiaomi';
$celular->modelo = 'Redmi';
$celular->cor = 'Preto';
$celular->bateria = 50;
$celular->estado = true;

echo $celular->marca . '<br>'; 
echo $celular->modelo .'<br>';
echo $celular->cor .'<br>'; 
echo $celular->bateria . '<br>';
echo ($celular->estado ? 'Celular ligado' : 'Celular desligado') .'<br>';

$celular -> desligar();
$celular-> ligar();
$celular->usar(10);
$celular->usar(10);
$celular->usar(10);
$celular->usar(10);
$celular->usar(10);
$celular->usar(10);
$celular->carregar(20);
$celular->usar(10);


?>