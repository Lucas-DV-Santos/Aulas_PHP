<?php
$segundos = 5;
session_start();
$moradores = [
    [
        "nome" => "João Pedro Silva",
        "email" => "joao@gmail.com",
        "senha" => 12344
    ],
    [
        "nome" => "Maria Eduarda Santos",
        "email" => "maria@gmail.com",
        "senha" => 45674
    ],
    [
        "nome" => "Gabriel Oliveira",
        "email" => "gabriel@gmail.com",
        "senha" => 78904
    ],
    [
        "nome" => "Ana Clara Souza",
        "email" => "ana@gmail.com",
        "senha" => 11224
    ],
    [
        "nome" => "Pedro Henrique Costa",
        "email" => "pedro@gmail.com",
        "senha" => 33454
    ]
];

$manutencaos = [
    [
        "nome" => "Carlos Eduardo Lima",
        "email" => "carlos@gmail.com",
        "senha" => 12345
    ],
    [
        "nome" => "Rafael Mendes",
        "email" => "rafael@gmail.com",
        "senha" => 45675
    ],
    [
        "nome" => "Lucas Ferreira",
        "email" => "lucas@gmail.com",
        "senha" => 78905
    ],
    [
        "nome" => "Matheus Rodrigues",
        "email" => "matheus@gmail.com",
        "senha" => 11225
    ],
    [
        "nome" => "Felipe Almeida",
        "email" => "felipe@gmail.com",
        "senha" => 33455
    ]
];

// Criando Classe usuário
Class Usuario {

    public string $nome;
    public string $email;
    public int $senha;

    public function __construct(string $nome, string $email, int $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        }

    protected function getDados(){
        return $this->nome;
        return $this->email;
        return $this->senha;
    }
}

// Criando Morador
Class Morador extends Usuario {
    public function __construct(string $nome, string $email, int $senha)
    {
        return parent::__construct($nome, $email, $senha);
    }

    public function getMorador(){
        $this->getDados();
        echo "
        Nome: " . $this->nome . "<br>" . 
        "Email: " . $this->email . "<br>" . 
        "Senhas: ".$this->senha . "<br>";

        echo"<br>Seu acesso é de morador<br>";
    }

    public function redirecionar_morador(){
       require_once("morador.php");
    }
}

Class Manutencao extends Usuario {
    public function __construct(string $nome, string $email, int $senha)
    {
        return parent::__construct($nome, $email, $senha);
    }

    public function getManutencao(){
        $this->getDados();
        echo "
        Nome: " . $this->nome . "<br>" . 
        "Email: " . $this->email . "<br>" . 
        "Senhas: ".$this->senha . "<br>";

        echo"<br>Seu acesso é de Manutenção<br>";
    }

    public function redirecionar_manutencao(){
       require_once("manutencao.php");
    }
}


if(!empty ($_POST["nome"]) AND !empty ($_POST["email"]) AND !empty ($_POST["senha"])){
    $ultimoCaracter = substr($_POST["senha"],-1);

    if($ultimoCaracter === "4"){
        $encontrado = false;
        if($encontrado == false){
            foreach($moradores as $morador){
                if($_POST["nome"] == $morador['nome'] && $_POST["email"] == $morador['email'] && $_POST["senha"] == $morador['senha']){
                    $usuario = new Morador($_POST["nome"], $_POST["email"], $_POST["senha"]);
                    $_SESSION['nome'] = $usuario->nome;
                    $_SESSION['email'] = $usuario->email;
                    $_SESSION['senha'] = $usuario->senha;
                    $usuario->redirecionar_morador();
                    $encontrado = true;
                    break;
              }
            }
            if($encontrado == false){
                header("Refresh: $segundos; url=http://127.0.0.1/HidroTech/");
                echo "<br>Algum dado dado está incorreto<br>";
                echo"Você será redirecionado a página de login..." ;
            }
         }
       }
    
    elseif($ultimoCaracter === "5"){
        $encontrado = false;
        if($encontrado == false){
            foreach($manutencaos as $manutencao){
                if($_POST["nome"] == $manutencao['nome'] && $_POST["email"] == $manutencao['email'] && $_POST["senha"] == $manutencao['senha']){
                    $usuario = new Manutencao($_POST["nome"], $_POST["email"], $_POST["senha"]);
                    $_SESSION['nome'] = $usuario->nome;
                    $_SESSION['email'] = $usuario->email;
                    $_SESSION['senha'] = $usuario->senha;
                    $usuario->redirecionar_manutencao();
                    $encontrado = true;
                    break;
        }
       }
       if($encontrado == false){
                header("Refresh: $segundos; url=http://127.0.0.1/HidroTech/");
                echo "<br>Algum dado dado está incorreto<br>";
                echo"Você será redirecionado a página de login..." ;
            }
       }
        
    }else{
        header("Refresh: $segundos; url=http://127.0.0.1/HidroTech/");
        echo"<br>Senha Invalida<br>";
        echo"Você será redirecionado a página de login..." ;
    }
}
    




?>