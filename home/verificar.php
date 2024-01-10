<?php
@session_start();
if(@$_SESSION['nivel'] != 'Administrador' and @$_SESSION['nivel'] != 'Associado'){
    echo "<script>window.location='../login/login.php'</script>";
    exit();
}
?>