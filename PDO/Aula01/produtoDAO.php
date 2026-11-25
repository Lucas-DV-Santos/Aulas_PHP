<?php

require_once("conexao.php");

Class ProdutoDAO {
    // Cria um atributo privado para armazenar a conexão com o banco de dados
    private $conexao;

    // Construtor da classe que recebe a conexão como parâmetro
    public function __construct() {
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    // Método Listar todos os dados do banco
    public function listar(){
        // Select no banco de dados
        $sql = "SELECT * FROM produtos";
        $comando = $this->conexao->query($sql);
        return $comando->fetchAll();
    }
    
    // Metodo de cadastro no banco de dados
    public function cadastrar($nome, $preco, $quantidade){
        $sql = "INSERT INTO produtos(nome,preco,quantidade)
        VALUES(:nome, :preco, :quantidade)";

        $comandoInsert = $this->conexao->prepare($sql);

        $comandoInsert->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ]);
    }

    public function buscarPorId($id){

        $sql = "SELECT * FROM produtos WHERE id = :id";

        $comandoId = $this->conexao->prepare($sql);

        $comandoId->execute([
            "id" => $id
        ]);

        return $comandoId->fetch();
    }

    public function atualizarProduto($id, $nome, $preco, $quantidade){
        
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade
        WHERE id = :id";

        $comando = $this->conexao->prepare($sql);

        $comando->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
            "id" => $id
        ]);
    }

    public function excluirPorId($id){
        $sql = "DELETE FROM produtos WHERE id = :id";

        $comando = $this->conexao->prepare($sql);
        $comando->execute([
            "id" => $id
        ]);
    }
    
}
?>