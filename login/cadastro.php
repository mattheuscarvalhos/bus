<?php
require_once("../conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmarsenha = $_POST['confirmarsenha'];
$senha_crip = md5($senha);

if($senha != $confirmarsenha){
    echo 'As senhas não se coincidem!';
    exit();
}

$query = $pdo->prepare("SELECT * FROM associados where email = :email");
$query->bindValue(":email", "$email");
$query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    if(@count($res) > 0){
        echo 'Este e-mail já está cadastrado, recupere sua senha';
        exit();
}

$query = $pdo->prepare("INSERT INTO associados SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, email = :email, data =  curDate()");
$query->bindValue(":nome", "$nome");
$query->bindValue(":sobrenome", "$sobrenome");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":email", "$email");
$query->execute();
$ult_id = $pdo->lastInsertId();
echo 'Cadastrado com sucesso';

$query = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, sobrenome = :sobrenome, telefone = :telefone, email = :email, senha = :senha, senha_crip = :senha_crip, nivel = 'Associado', id_pessoa = :id_pessoa, ativo = 'Sim', data = curDate()");
$query->bindValue(":nome", $nome);
$query->bindValue(":sobrenome", $sobrenome);
$query->bindValue(":telefone", $telefone);
$query->bindValue(":email", $email);
$query->bindValue(":senha", $senha);
$query->bindValue(":senha_crip", $senha_crip);
$query->bindValue(":id_pessoa", $ult_id);
$query->execute();

?>