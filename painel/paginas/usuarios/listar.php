<?php
$tabela = 'usuarios';
require_once("../../../conexao.php");

$query = $pdo->query("SELECT * FROM $tabela order by id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$linhas = @count($res);
if($linhas > 0){
echo <<<HTML
    <small>
        <table class="table table-hover" id="tabela">
        <thead> 
        <tr> 
        <th>Nome</th>	
        <th class="esc">Sobrenome</th>	
        <th class="esc">Telefone</th>	
        <th class="esc">E-mail</th>
        <th class="esc">Nível</th>
        <th class="esc">Ativo</th>
        <th class="esc">Cadastrado</th>			
        <th>Ações</th>
        </tr> 
        </thead> 
        <tbody>	
    HTML;
}

    for($i=0; $i<$linhas; $i++){	
        $id = $res[$i]['id'];
        $nome = $res[$i]['nome'];
        $sobrenome = $res[$i]['sobrenome'];
        $telefone = $res[$i]['telefone'];
        $email = $res[$i]['email'];
        $senha = $res[$i]['senha'];
        $nivel = $res[$i]['nivel'];
        $ativo = $res[$i]['ativo'];
        $data = $res[$i]['data'];

        //Formatação da data BR.
        $data = implode('/', array_reverse(explode('-', $data)));

        if($ativo == 'Sim'){
            $icone = 'fa-check-square';
            $titulo_link = 'Desativar Associado';
            $acao = 'Não';
            $classe_ativo = '';
        }else{
            $icone = 'fa-square-o';
            $titulo_link = 'Ativar Associado';
            $acao = 'Sim';
            $classe_ativo = '#c4c4c4';
        }

        if ($nivel == 'Administrador' || $nivel == 'Diretoria') {
            $senha = '*****';
        }        

echo <<<HTML
<tr style="color:{$classe_ativo}">
<td>{$nome}</td>
<td>{$sobrenome}</td>
<td>{$telefone}</td>
<td>{$email}</td>
<td>{$nivel}</td>
<td>{$ativo}</td>
<td>{$data}</td>
<td>
<big><a href="#" onclick="editar('{$id}','{$nome}','{$sobrenome}','{$telefone}','{$email}','{$nivel}','{$ativo}',)" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

    <li class="dropdown head-dpdn2" style="display: inline-block;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

            <ul class="dropdown-menu" style="margin-left:-230px;">
            <li>
            <div class="notification_desc2">
            <p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}')"><span class="text-danger">Sim</span></a></p>
            </div>
            </li>										
            </ul>
    </li>

<big><a href="#" onclick="mostrar('{$nome}','{$sobrenome}','{$telefone}','{$email}','{$senha}','{$nivel}','{$ativo}','{$data}',)" title="Mostrar Dados"><i class="fa fa-info-circle text-primary"></i></a></big>
<big><a href="#" onclick="ativar('{$id}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone} text-success"></i></a></big>
</td>
HTML;
}

echo <<<HTML
</tbody>
<small><div align="center" id="mensagem-excluir"></div></small>
</table>
HTML;
?>

<script>
    $(document).ready(function() {
        $('#tabela').DataTable({
            "language" : {
                "url" : '//cdn.datatables.net/plug-ins/1.13.2/i18n/pt-BR.json'
            },
            "ordering": false,
            "stateSave": true
        });
    });
</script>

<script type="text/javascript">
    function mostrar(nome, sobrenome, telefone, email, senha, nivel, ativo, data){
        $('#mensagem').text('');
        $('#titulo_inserir').text('Editar Registro');

        $('#titulo_dados').text(nome);
        $('#sobrenome_dados').text(sobrenome);
        $('#telefone_dados').text(telefone);
        $('#email_dados').text(email);
        $('#senha_dados').text(senha);
        $('#nivel_dados').text(nivel);
        $('#ativo_dados').text(ativo);
        $('#data_dados').text(data);

        $('#modalDados').modal('show');
    }

    function editar (id, nome, sobrenome, telefone, email, nivel, ativo){
        $('#mensagem').text('');
        $('#titulo_inserir').text('Editar Registro');

        $('#id').val(id);
        $('#nome').val(nome);
        $('#sobrenome').val(sobrenome);
        $('#telefone').val(telefone);
        $('#email').val(email);
        $('#nivel').val(nivel).change();
        $('#ativo').val(ativo);

        $('#modalForm').modal('show');
    }

    function limparCampos() {
    $('#id').val('');
    $('#nome').val('');
    $('#sobrenome').val('');
    $('#telefone').val('');
    $('#email').val('');
    $('#ativo').val('');
}

</script>

