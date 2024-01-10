<?php
require_once("../conexao.php");

$email = $_POST['emailrecuperar'];

$query = $pdo->prepare("SELECT * FROM usuarios where email = :email");
$query->bindValue(":email", "$email");
$query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    if(@count($res) == 0){
        echo 'E-mail não cadastrado!';
        exit();
}else{
    $email = $res[0]['email'];
    $senha = $res[0]['senha'];
}

//Enviar e-mail
    $destinatario = $email;
    $assunto = $nome_sistema . ' - Recuperação de Senha';
    $mensagem = utf8_decode('Sua senha é ' .$senha);
    $cabecalhos = "From: ".$email_sistema;
    mail($destinatario, $assunto, $mensagem, $cabecalhos);
?>