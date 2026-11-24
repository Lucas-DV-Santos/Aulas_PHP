<?php
require_once __DIR__ . "/../Conexao.php";
Class MedicaoDAO{
   private $conexao;

    public function __construct() {
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    } 

    public function listar(){
        // Select no banco de dados
        $sql = "SELECT * FROM medicao";
        $comando = $this->conexao->query($sql);
        return $comando->fetchAll();
    }    

    public function NovaMedicaoMan($percentual){
        $sql = "INSERT INTO medicao(percentual, data_hora, fk_id_sensor)
        VALUES(:percentual, NOW(), (SELECT id FROM sensor WHERE tipo = 'manutencao'))";
        $comando = $this->conexao->prepare($sql);
        $comando->bindValue(":percentual", $percentual);

        return $comando->execute(); 
    }

    public function GetMedicao(){
      $sql = "SELECT percentual, data_hora
                FROM medicao
                WHERE fk_id_sensor = (
                SELECT id FROM sensor WHERE tipo = 'manutencao'
                )
            ORDER BY data_hora DESC
            LIMIT 1;";

    $comando = $this->conexao->prepare($sql);
    $comando->execute();

    return $comando->fetch(PDO::FETCH_ASSOC);
    }

    

}

?>