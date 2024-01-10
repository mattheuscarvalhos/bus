<?php
//Configuração de limite de cache.
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

//Limite de cache em 30 minutos.
session_cache_limiter(30);
$cache_expire = session_cache_expire();

//Inicia sessão.
@session_start();
require_once('../conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_crip = md5($senha);

    $query = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha_crip = :senha");
    $query->bindValue(":email", "$email");
    $query->bindValue(":senha", "$senha_crip");
    $query->execute();
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $linhas = @count($res);
        //Nível do usuário
        if($linhas > 0){

            if($res[0]['ativo'] != 'Sim'){
                echo "<script>window.alert('Seu acesso foi desativado!')</script>";
                echo "<script>window.location='../login/login.php'</script>";
            }
            $_SESSION['id'] = $res[0]['id'];
            $_SESSION['nome'] = $res[0]['nome'];
            $_SESSION['nivel'] = $res[0]['nivel'];

            echo '<script>window.location="../home/home.php"</script>';
        }


        if($_SESSION['nivel'] == 'Administrador'){
            echo "<script>window.location='../home/home.php'</script>";
        }
        if($_SESSION['nivel'] == 'Diretoria'){
            echo "<script>window.location='../home/home.php'</script>";
        }

        if($_SESSION['nivel'] == 'Associado'){
            echo "<script>window.location='../home/home.php'</script>";
        }

    else{
        echo "<script>window.alert('Dados incorretos')</script>";
        echo "<script>window.location='../login/login.php'</script>";
        exit();
    }

?>