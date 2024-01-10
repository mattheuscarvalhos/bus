<?php 
@session_start();
$pag_inicial = 'home';

if(@$_GET['pagina'] != ""){
    $pagina = @$_GET['pagina'];
}else{
    $pagina = $pag_inicial;
}

?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
	
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		

		<meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>NOME DO SISTEMA</title>

		<link rel="icon" href="../assets/img/comum/favicon.png" type="image/x-icon"/>
		<link href="../assets/css/icons.css" rel="stylesheet">
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="../assets/css/style.css" rel="stylesheet">
		<link href="../assets/css/style-dark.css" rel="stylesheet">
		<link href="../assets/css/style-transparent.css" rel="stylesheet">
		<link href="../assets/css/skin-modes.css" rel="stylesheet" />
		<link href="../assets/css/animate.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link href="../assets/css/login_painel/custom.css" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/6320f7a20c.js" crossorigin="anonymous"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>		


		


	</head>

	<body class="ltr main-body app sidebar-mini">



		<!-- Page -->
		<div class="page">

			<div>
				<!-- APP-HEADER1 -->
				<div class="main-header side-header sticky nav nav-item">
						<div class=" main-container container-fluid">
							<div class="main-header-left ">
								<div class="responsive-logo">
									<a href="index.php" class="header-logo">
										<img src="../assets/img/comum/aemar.png" class="mobile-logo logo-1" alt="logo" style="width:40% !important">
										<img src="../assets/img/comum/aemar.png" class="mobile-logo dark-logo-1" alt="logo" style="width:40% !important">
									</a>
								</div>
								<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
									<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
									<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
								</div>
								<div class="logo-horizontal">
									<a href="index.php" class="header-logo">
										<img src="../assets/img/comum/aemar.png" class="mobile-logo logo-1" alt="logo">
										<img src="../assets/img/comum/aemar.png" class="mobile-logo dark-logo-1" alt="logo">
									</a>
								</div>
							</div>
							<div class="main-header-right">
								<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon fe fe-more-vertical "></span>
								</button>
								<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
									<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
										<ul class="nav nav-item header-icons navbar-nav-right ms-auto">

											<li class="nav-item full-screen fullscreen-button">
												<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
											</li>
						
											<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
												<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><i class="fas fa-user-circle profile-icon"></i></a>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="" data-bs-target="#modalPerfil" data-bs-toggle="modal"><i class="fa fa-user"></i>Perfil</a>	
													<a class="dropdown-item" href=""><i class="fa fa-cogs"></i>  Configurações</a>
													<a class="dropdown-item" href="logout.php"><i class="fa fa-arrow-left"></i> Sair</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							
							</div>
						</div>
					</div>				<!-- /APP-HEADER -->

				<!--APP-SIDEBAR-->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="index.php">
								<img src="../assets/img/comum/aemar.png" class="main-logo  desktop-logo" alt="logo">
								<img src="../assets/img/comum/aemar.png" class="main-logo  desktop-dark" alt="logo">
								<img src="" class="main-logo  mobile-logo" alt="">
								<img src="" class="main-logo  mobile-dark" alt="">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">



								<li class="slide <?php echo @$menu_usuarios ?>">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24"><path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z"/></svg><span class="side-menu__label">Associados</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
									
									<li class="<?php echo @$usuarios ?>"><a class="slide-item" href="usuarios">Cadastros</a></li>
										
									</ul>
								</li>
		
						
							
			
								
							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>				<!--/APP-SIDEBAR-->
			</div>

			<!-- MAIN-CONTENT -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">



				<?php 
				require_once('paginas/'.$pagina.'.php');
				?>

					


				</div>
				<!-- Container closed -->
			</div>
			<!-- MAIN-CONTENT CLOSED -->

				
			






			<!-- FOOTER -->
			<!-- FOOTER END -->

		</div>
		<!-- End Page -->

		<!-- BUYNOW-MODAL -->
		       
		
	
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>


		<!-- GRAFICOS -->
		<script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>		
		<script src="../assets/js/apexcharts.js"></script>

		<!--INTERNAL  INDEX JS -->
		<script src="../assets/js/index.js"></script>
	

	
		<script src="../assets/plugins/jquery/jquery.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/plugins/moment/moment.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="../assets/plugins/perfect-scrollbar/p-scroll.js"></script>
		<script src="../assets/js/eva-icons.min.js"></script>
		<script src="../assets/plugins/side-menu/sidemenu.js"></script>
		<script src="../assets/js/sticky.js"></script>
		<script src="../assets/plugins/sidebar/sidebar.js"></script>
		<script src="../assets/plugins/sidebar/sidebar-custom.js"></script>


		<!-- INTERNAL DATA TABLES -->
		<script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>


		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


		<!-- POPOVER JS -->
		<script src="../assets/js/popover.js"></script>

		<script src="../assets/js/themecolor.js"></script>
		<script src="../assets/js/custom.js"></script>		

		<!--INTERNAL  INDEX JS -->
		<script src="../assets/js/index.js"></script>




		
	</body>

</html>


<!-- Modal Perfil -->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
				<div class="modal-header bg-primary text-white">
                            <h4 class="modal-title">Alterar Dados</h4>
                            <button id="btn-fechar" aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span class="text-white" aria-hidden="true">&times;</span></button>
                        </div>

			<form id="form-perfil">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6 mb-3">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome_perfil" name="nome" placeholder="Seu Nome" value="<?php echo @$nome_usuario ?>" required>							
						</div>

						<div class="col-md-6 mb-3">							
								<label>Email</label>
								<input type="email" class="form-control" id="email_perfil" name="email" placeholder="Seu Nome" value="<?php echo @$email_usuario ?>" required>							
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 mb-3">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone_perfil" name="telefone" placeholder="Seu Telefone" value="<?php echo @$telefone_usuario ?>" required>							
						</div>

						<div class="col-md-4 mb-3">							
								<label>Senha</label>
								<input type="password" class="form-control" id="senha_perfil" name="senha" placeholder="Senha" value="<?php echo @$senha_usuario ?>" required>							
						</div>

						<div class="col-md-4 mb-3">							
								<label>Confirmar Senha</label>
								<input type="password" class="form-control" id="conf_senha_perfil" name="conf_senha" placeholder="Confirmar Senha" value="" required>							
						</div>

						
					</div>


					<div class="row">
						<div class="col-md-12 mb-3">	
							<label>Endereço</label>
							<input type="text" class="form-control" id="endereco_perfil" name="endereco" placeholder="Seu Endereço" value="<?php echo @$endereco_usuario ?>" >	
						</div>
					</div>
					


					<div class="row">
						<div class="col-md-8 mb-3">							
								<label>Foto</label>
								<input type="file" class="form-control" id="foto_perfil" name="foto" value="<?php echo @$foto_usuario ?>" onchange="carregarImgPerfil()">							
						</div>

						<div class="col-md-4 mb-3">								
							<img src="images/perfil/sem-foto.jpg"  width="80px" id="target-usu">								
							
						</div>

						
					</div>


					<input type="hidden" name="id_usuario" value="<?php echo @$id_usuario ?>">
				

				<br>
				<small><div id="msg-perfil" align="center"></div></small>
			</div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>

	<!-- Mascaras JS -->
<script type="text/javascript" src="js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 

