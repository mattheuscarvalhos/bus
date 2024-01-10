<?php 
$usuario='root';
$senha='';
$banco= 'aemarbus';
$servidor='localhost';

try {
    $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco de dados!<br><br>'.$e;
}

    //Variáveis do sistema
    $nome_sistema = 'Aemarbus';
    $email_sistema = 'administrador@administrador.com';

 ?>