<?php
$tabela = 'usuarios';
require_once("../../../conexao.php");

$id = $_POST['id'];
$query = $pdo->query("DELETE FROM $tabela WHERE id = '$id'");
echo 'Excluído com sucesso';
?>