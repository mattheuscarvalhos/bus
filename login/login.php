<?php
require_once('../conexao.php');

    //Criptografar senha
    $senha = '123';
    $senha_crip = md5($senha);

    //Verificação de usuário Administrador no banco de dados pra ver se existe.
    $query = $pdo->query("SELECT * FROM usuarios where nivel = 'Administrador'");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    if(@count($res) == 0){
         //Criar usuário Administrador caso não existir nenhum.
        $pdo->query("INSERT INTO usuarios SET nome = 'Administrador', sobrenome = 'Administrador', telefone= '00000000000', email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', id_pessoa = '1', ativo = 'Sim', data = curDate()");

     //Criar usuário Administrador na tabela Administadores.
     $pdo->query("INSERT INTO administradores SET nome = 'Administrador', sobrenome = 'Administrador', telefone= '00000000000', email = '$email_sistema', ativo = 'Sim', data = curDate()");
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- TITULO -->
    <title>Aemarbus - Login</title>

    <link rel="icon" href="assets/img/comum/favicon.png" type="image/x-icon" />
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <link href="../assets\css\login_painel\custom.css" rel="stylesheet">
    <link href="../assets\css\login_painel\style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6320f7a20c.js" crossorigin="anonymous"></script>
</head>

<body class="ltr error-page1 bg-primary">
    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
                        <div class="card-sigin">
                            <!-- Demo content-->
                            <div class="main-card-signin d-md-flex">
                                <div class="wd-100p">
                                    <div class="d-flex mb-4 justify-content-center">
                                        <a href="index.html">
                                            <img src="../assets\img\comum/aemar.png" class="sign-favicon" alt="logo">
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="main-signup-header">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 p-3">
                                                    <?php
                                                    if (isset($_SESSION['msg'])) {
                                                        echo '<div class="alert alert-danger mg-b-0 mb-3 alert-dismissible fade show" role="alert">
                                                                    <strong><span class="alert-inner--icon"><i class="fe fe-slash"></i></span></strong> ' . $_SESSION['msg'] . '!
                                                                    <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button"><span aria-hidden="true">&times;</span></button>
                                                                </div>';

                                                        unset($_SESSION['msg']);
                                                    }
                                                    ?>

                                                    <form method="post" action="autenticar.php">
                                                        <div class="form-group">
                                                            <label>E-mail</label>
                                                            <input class="form-control" name="email" id="emaillogin" placeholder="Digite seu E-mail" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Senha</label>
                                                            <input id="password-field" type="password" class="form-control" name="senha" id="senhalogin" placeholder="Digite sua senha" required>
                                                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                                        </div>
                                                        <button class="btn btn-primary btn-block">Entrar</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="main-signin-footer text-center mt-3">
                                                <p>
                                                    <a href="" class="mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Esqueceu sua Senha?</a>
                                                    <!-- Adicione uma linha horizontal abaixo do texto -->
                                                    <hr class="mb-3">
                                                    <!-- Adicione a frase centralizada -->
                                                    <a href="" class="mb-3" data-bs-toggle="modal" data-bs-target="#cadastrarModal">Cadastre-se <strong>aqui</strong></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cadastrar-->
    <div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModallLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true" class="text-white">&times;</span></button>
                </div>
                <form id="form-cadastro">
                    <div class="modal-body">
                        <label for="recipient-name" class="col-form-label">Nome</label>
                        <input placeholder="Nome" class="form-control" type="text" name="nome" id="nome" required>

                        <label for="recipient-name" class="col-form-label">Sobrenome</label>
                        <input placeholder="Sobrenome" class="form-control" type="text" name="sobrenome" id="sobrenome" required>

                        <label for="recipient-name" class="col-form-label">Telefone</label>
                        <input placeholder="Telefone" class="form-control" type="number" name="telefone" id="telefone" required>

                        <label for="recipient-name" class="col-form-label">E-mail</label>
                        <input placeholder="E-mail" class="form-control" type="email" name="email" id="email_cadastro" required>

                        <label for="recipient-name" class="col-form-label">Senha</label>
                        <input id="password-field-confirm1" type="password" class="form-control" name="senha" placeholder="Senha" id="senha_cadastro" required>
                        <span toggle="#password-field-confirm1" class="fa fa-fw fa-eye field-icon toggle-password-confirm1"></span>

                        <label for="recipient-name" class="col-form-label">Confirme sua senha</label>
                        <input id="password-field-confirm2" type="password" class="form-control" name="confirmarsenha" placeholder="Confirmar Senha" id="confirmarsenha" required>
                        <span toggle="#password-field-confirm2" class="fa fa-fw fa-eye field-icon toggle-password-confirm2"></span>
                        <br>

                            <div id="mensagem-cadastro" align="center"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Recuperação -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true" class="text-white">&times;</span></button>
                </div>
                <form id="form-recuperar">
                    <div class="modal-body">
                        <label for="recipient-name" class="col-form-label">E-mail</label>
                        <input placeholder="Digite seu e-mail" class="form-control" type="email" name="emailrecuperar" id="email_recuperar" required>

                           <br>                         
                            <div id="mensagem-recuperar" align="center"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Recuperar Senha</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/js/custom.js"></script>

    <script type="text/javascript">
	$("#form-cadastro").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "cadastro.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-cadastro').text('');
				$('#mensagem-cadastro').removeClass()
				if (mensagem.trim() == "Cadastrado com sucesso") {

					//$('#btn-fechar-usu').click();
                    $('#mensagem-cadastro').addClass('text-success')
                    $('#mensagem-cadastro').text(mensagem)
                    $('#email').val($('#email_cadastro').val())
                    $('#senha').val($('#senha_cadastro').val())

				} else {

					$('#mensagem-cadastro').addClass('text-danger')
					$('#mensagem-cadastro').text(mensagem)
				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>

<script type="text/javascript">
	$("#form-recuperar").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "recuperar.php",
			type: 'POST',
			data: formData,

			success: function (mensagem) {
				$('#mensagem-recuperar').text('');
				$('#mensagem-recuperar').removeClass()
				if (mensagem.trim() == "") {

					//$('#btn-fechar-usu').click();
                    $('#mensagem-recuperar').addClass('text-success')
                    $('#mensagem-recuperar').text('Senha enviada para o e-mail!')
				} else {
                    
                    if(mensagem.trim() == "E-mail não cadastrado!"){
                    $('#mensagem-recuperar').addClass('text-danger')
					$('#mensagem-recuperar').text(mensagem)
                    }else{
                    $('#mensagem-recuperar').addClass('text-danger')
					$('#mensagem-recuperar').text('Servidor SMTP não conectado.')
                    }

				}


			},

			cache: false,
			contentType: false,
			processData: false,

		});

	});
</script>


    <script>
    function togglePassword(iconClass, inputToggle) {
        $(iconClass).click(function () {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            input.attr("type", input.attr("type") === "password" ? "text" : "password");
        });
    }

    togglePassword(".toggle-password", ".password-input");
    togglePassword(".toggle-password-confirm1", ".confirm1-input");
    togglePassword(".toggle-password-confirm2", ".confirm2-input");
</script>
</body>

</html>