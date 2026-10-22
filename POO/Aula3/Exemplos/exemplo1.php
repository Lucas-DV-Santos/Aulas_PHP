<?php

class Pessoa{
    public function apresentar(){
        echo 'Olá! Eu sou uma pessoa. <br>';
    }
}
class Aluno extends Pessoa{

    }


$aluno1 = new Aluno();
$aluno1->apresentar();



?>