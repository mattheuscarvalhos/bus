<?php
@session_start();
if (@$_SESSION['id'] == ""){
    echo '<script>window.location="../login/login.php"</script>';
    exit();
}
?>