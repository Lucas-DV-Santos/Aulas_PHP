<?php
require_once 'Servico.php';

$responsavel = $_POST['responsavel'];
$equipamento = $_POST['equipamento'];
$quantidade = $_POST['quantidade'];
$tipoServico = $_POST['tipo_servico'];

if ($quantidade <= 0) {
    echo "<p>Erro: A quantidade deve ser maior que zero.</p>";
    echo '<a href="index.html">Voltar</a>';
    exit;
}

switch ($tipoServico) {
    case 'preventiva':
        $servico = new Preventiva($quantidade);
        $nomeServicoFormatado = 'Manutenção Preventiva';
        break;
    case 'corretiva':
        $servico = new Corretiva($quantidade);
        $nomeServicoFormatado = 'Manutenção Corretiva';
        break;
    case 'instalacao':
        $servico = new Instalacao($quantidade);
        $nomeServicoFormatado = 'Instalação de Equipamentos';
        break;
    default:
        echo "<p>Erro: Tipo de serviço inválido.</p>";
        echo '<a href="index.html">Voltar</a>';
        exit;
}

$tempoTotal = $servico->calcularTempo();

echo "<h2>Resumo do Agendamento</h2>";
echo "<p><strong>Responsável:</strong> $responsavel</p>";
echo "<p><strong>Equipamento:</strong> $equipamento</p>";
echo "<p><strong>Quantidade:</strong> {$servico->getQuantidade()}</p>";
echo "<p><strong>Tipo de Serviço:</strong> $nomeServicoFormatado</p>";
echo "<p><strong>Tempo Total Estimado:</strong> $tempoTotal hora(s)</p>";
echo '<br><a href="index.html">Voltar ao formulário</a>';
?>
