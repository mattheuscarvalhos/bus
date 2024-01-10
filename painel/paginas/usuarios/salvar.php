<?php
$tabela = 'usuarios';
require_once("../../../conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$senha =  '123';
$senha_crip = md5($senha);

//Verificação de duplicidade E-mail no modal INSERIR.
$query = $pdo->query("SELECT * FROM $tabela where email = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
    echo 'E-mail já cadastrado!';   
    exit();
}

//Verificação de duplicidade Telefone no modal INSERIR.
$query = $pdo->query("SELECT * FROM $tabela where telefone = '$telefone'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_reg = @$res[0]['id'];
if(@count($res) > 0 and $id != $id_reg){
    echo 'Telefone já cadastrado!';   
    exit();
}
if($id == ""){
    $query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, email = :email, senha = '$senha', senha_crip= '$senha_crip', nivel = '$nivel', ativo = 'Sim', data = curDate()");
}else{
    $query = $pdo->prepare("UPDATE $tabela SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, email = :email, nivel = '$nivel' where id = '$id'");
}
$query->bindValue(":nome", "$nome");
$query->bindValue(":sobrenome", "$sobrenome");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":email", "$email");
$query->execute();

echo 'Salvo com sucesso';

?>