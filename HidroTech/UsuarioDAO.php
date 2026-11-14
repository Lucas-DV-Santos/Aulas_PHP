<?php
require_once("conexao.php");
Class UsuarioDAO{
   private $conexao;

    public function __construct() {
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    } 

    public function listar(){
        // Select no banco de dados
        $sql = "SELECT * FROM usuarios";
        $comando = $this->conexao->query($sql);
        return $comando->fetchAll();
    }

    public function login($email, $senha, $nome){
        $sql = 'SELECT * FROM usuario WHERE email = :email';

        $comando = $this->conexao->prepare($sql);
        $comando->bindValue(':email', $email);
        $comando->execute();
        return $comando->fetch();
    }
}








?>