<?php

Class Conexao{
    // IP do Banco
    private string $servidor = "localhost";

    // Nome da Database
    private string $banco = "aula_pdo";

    // Usúario para fazer login no Banco
    private string $usuario = "root";

    //Senha para fazer Login
    private string $senha ="";

    public function conectar(){
        $dns = "mysql:host=$this->servidor;dbname=$this->banco; charset=utf8mb4";

        $conexao = new PDO(
            $dns,
            $this->usuario,
            $this->senha,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
        return $conexao;
    }
}




?>