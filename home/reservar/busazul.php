<?php
$tabela = 'assentos';
require_once("../../conexao.php");

// Obtenha os dados do formulário
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$assento = $_POST['assento'];
$data_ocupacao = date('Y-m-d');

// Verifica se o assento já está ocupado
$verifica_query = $pdo->prepare("SELECT * FROM $tabela WHERE id = :id AND (status = 'ocupado' OR status IS NULL OR status = '')");
$verifica_query->bindValue(":id", $id);
$verifica_query->execute();
$assento_ocupado = $verifica_query->fetch(PDO::FETCH_ASSOC);

if ($assento_ocupado) {
    // Assento já ocupado, retorne uma mensagem de erro ou trate conforme necessário
    echo 'Assento já ocupado';
} else {
    // Assento disponível, proceda com o registro
    $query = $pdo->prepare("INSERT INTO $tabela (id, numero_assento, status, user_id, data_ocupacao) 
                           VALUES (:id, :assento, 'ocupado', :user_id, :data_ocupacao)");
    $query->bindValue(":id", $id);
    $query->bindValue(":assento", $assento);
    $query->bindValue(":user_id", $user_id);
    $query->bindValue(":data_ocupacao", $data_ocupacao);
    $query->execute();

    echo 'Assento registrado com sucesso';
}
?>
