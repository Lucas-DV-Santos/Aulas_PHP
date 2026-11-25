<?php

require_once("conexao.php");

Class PedidoDAO {
    // Cria um atributo privado para armazenar a conexão com o banco de dados
    private $conexao;

    // Construtor da classe que recebe a conexão como parâmetro
    public function __construct() {
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    // Método Listar todos os dados do banco
    
    // Metodo de cadastro no banco de dados
    public function cadastrar($idProduto,  $quantidade){
        $sql = "INSERT INTO pedidos(produto_id, quantidade)
        VALUES(:idProduto,  :quantidade)";

        $comandoInsert = $this->conexao->prepare($sql);

        $comandoInsert->execute([
            "idProduto" => $idProduto,
            "quantidade" => $quantidade
        ]);
    }
    
}
?>