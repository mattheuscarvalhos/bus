<?php
$pag = 'usuarios';
?>

<a onclick="inserir()" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Usuário</a>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">

</div>

<script>
    $(document).ready(function() {
        $('#tabela').DataTable({
            "language" : {
                "url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
            }
        });
    });
</script>

<!--Modal Inserir-->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_inserir"></span></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="form">
			<div class="modal-body">
				

					<div class="row">
						<div class="col-md-6">							
								<label>Nome</label>
								<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>							
						</div>

						<div class="col-md-6">							
								<label>Sobrenome</label>
								<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>							
						</div>

					</div>


					<div class="row">

                        <div class="col-md-6">							
								<label>Telefone</label>
								<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>							
						</div>

                        <div class="col-md-6">							
								<label>Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>							
						</div>
					</div>

						<div class="row">
						<div class="col-md-6">							
								<label>Nível</label>
								<select class="form-control" name="nivel" id="nivel">
                                <option>Diretoria</option>
                                <option>Associado</option>
                                </select>						
						</div>
						
					</div>
					</div>
					<input type="hidden" class="form-control" id="id" name="id">		
					<br>
    				<div id="mensagem" align="center"></div>
			<div class="modal-footer">       
				<button type="submit" class="btn btn-primary">Salvar</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!--Modal Dados-->
<div class="modal fade" id="modalDados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
				<h4 class="modal-title" id="exampleModalLabel"><span id="titulo_dados"></span></h4>
				<button id="btn-fechar-dados" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -25px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">

			<div class="row" style="margin-top: 0px">
					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Nome: </b></span><span id="nome_dados"></span>
					</div>

					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Sobrenome </b></span><span id="sobrenome_dados"></span>
					</div>

					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Telefone: </b></span><span id="telefone_dados"></span>
					</div>

					<div class="col-md-8" style="margin-bottom: 5px">
						<span><b>Email: </b></span><span id="email_dados"></span>
					</div>

					<div class="col-md-4" style="margin-bottom: 5px">
						<span><b>Senha: </b></span><span id="senha_dados"></span>
					</div>

					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Nível: </b></span><span id="nivel_dados"></span>
					</div>

					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Ativo: </b></span><span id="ativo_dados"></span>
					</div>

					<div class="col-md-6" style="margin-bottom: 5px">
						<span><b>Data Cadastro: </b></span><span id="data_dados"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

