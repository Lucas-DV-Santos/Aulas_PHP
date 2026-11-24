<?php
require_once __DIR__ . "/../Conexao.php";
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

    public function cadastro($nome ,$email, $senha, $acesso){

        $sqlVerifica = "SELECT id FROM usuario WHERE email = :email";
        $stmtVerifica = $this->conexao->prepare($sqlVerifica);
        $stmtVerifica->bindValue(':email', $email);
        $stmtVerifica->execute();

        if ($stmtVerifica->fetch()) {
            header('Location: usuario_ja_cadastrado.php');
            exit();
        }

        $sql = 'INSERT INTO usuario (nome, email, senha, acesso)
                VALUES (:nome, :email,:senha,:acesso)';

        $comando = $this->conexao->prepare($sql);

        $comando->bindValue(':nome', $nome);
        $comando->bindValue(':email', $email);
        $comando->bindValue(':senha', $senha);
        $comando->bindValue(':acesso', $acesso);

        return $comando->execute();
    
}
}
?>