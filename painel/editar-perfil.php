<?php
$tabela = 'usuarios';
require_once("../conexao.php");

$id = $_POST['id_usuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$senha_crip = md5($senha);

if($conf_senha != $senha){
    echo 'As senhas não se coincidem';
    exit();
}

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

    $query = $pdo->prepare("UPDATE $tabela SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, senha = :senha, senha_crip = '$senha_crip', email = :email where id = '$id'");

$query->bindValue(":nome", "$nome");
$query->bindValue(":sobrenome", "$sobrenome");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":email", "$email");
$query->bindValue(":senha", "$senha");
$query->execute();

echo 'Editado com sucesso';

?>