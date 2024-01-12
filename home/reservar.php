<?php
require_once("../conexao.php");

$tabelaAssentos = 'assentos';
$tabelaOnibus = 'onibus';

$onibusAzul = isset($_POST['onibusazul']) ? $_POST['onibusazul'] : null;
$numeroAssento = isset($_POST['numeroassento']) ? $_POST['numeroassento'] : null;
$faculdade = isset($_POST['faculdade']) ? $_POST['faculdade'] : null;

if ($onibusAzul && $numeroAssento && $faculdade) {
    // Inserir na tabela onibus.
    $queryOnibus = $pdo->prepare("INSERT INTO $tabelaOnibus (nome) VALUES (:nome)");
    $queryOnibus->bindParam(':nome', $onibusAzul);
    $queryOnibus->execute();

    // Recupera o ID do último ônibus
    $idOnibusAzul = $pdo->lastInsertId();

    // Inserção na tabela assentos.
    $queryAssentos = $pdo->prepare("INSERT INTO $tabelaAssentos (onibus_id, numero_assento, ocupado, faculdade) VALUES (:onibus_id, :numero_assento, :ocupado, :faculdade)");
    $queryAssentos->bindParam(':onibus_id', $idOnibusAzul);
    $queryAssentos->bindParam(':numero_assento', $numeroAssento);
    
    // Marcar o assento como ocupado
    $queryAssentos->bindValue(':ocupado', 1); // 1 significa que o assento está ocupado
    
    $queryAssentos->bindParam(':faculdade', $faculdade);
    $queryAssentos->execute();

    echo "Cadastrado com sucesso";
} else {
    echo "Erro: Preencha todos os campos do formulário.";
}
?>
