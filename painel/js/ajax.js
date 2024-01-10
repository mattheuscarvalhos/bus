$(document).ready(function() {    
    listar();    
} );

function listar(){
    $.ajax({
        url: 'paginas/' + pag + "/listar.php",
        method: 'POST',
        data: {},
        dataType: "html",

        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}

//Ajax para inserir novos usuários
function inserir(){
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show');
    limparCampos();
}

$("#form").submit(function (event) {

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: 'paginas/' + pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass();
            if (mensagem.trim() == "Salvo com sucesso") {

                $('#btn-fechar').click();
                listar();          

            } else {

                $('#mensagem').addClass('text-danger');
                $('#mensagem').text(mensagem);
            }
        },

        cache: false,
        contentType: false,
        processData: false,

    });
});

function excluir(id){
    $('#mensagem-excluir').text('Excluindo...')
    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: {id,},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Excluído com sucesso") {
                listar();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}

function ativar(id, acao){
	var id_usuario = localStorage.id_usu;
    var id_empresa = localStorage.id_empresa;
    $.ajax({
        url: 'paginas/' + pag + "/mudar-status.php",
        method: 'POST',
        data: {id, id_usuario, acao, id_empresa},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Alterado com sucesso") {
                listar();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}