<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6320f7a20c.js" crossorigin="anonymous"></script>
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/plugins/moment/moment.js"></script>
    <script src="../../assets/js/custom.js"></script>
    <link rel="stylesheet" href="bueblus.css">
    <title>Document</title>
</head>
<body>
    
    <div class="mx-auto col-sm-3 d-flex align-items-center justify-content-center legend">
        <div class="legend-item">
            <div class="livre"></div>
            <span class="">Livre</span>
        </div>
        <div class="legend-item">
            <div class="selecionado"></div>
            <span class="">Selecionado</span>
        </div>
        <div class="legend-item">
            <div class="ocupado"></div>
            <span class="">Ocupado</span>
        </div>
    </div>


    <div class="container">
        <div class="mx-auto text-center">
            <img src="../reservar/bus/bus-front-v.svg"  alt="">
        </div>
    </div>
    
    <form id="form-busazul">
    <section class="grid-template-areas-1 bus-background mx-auto">
        <div class="seats">01</div>
        <div class="seats">02</div>
        <div class="seats">03</div>
        <div class="seats">04</div>
        <div class="seats">05</div>
        <div class="seats">06</div>
        <div class="seats">07</div>
        <div class="seats">08</div>
        <div class="seats">09</div>
        <div class="seats">10</div>
        <div class="seats">11</div>
        <div class="seats">12</div>
        <div class="seats">13</div>
        <div class="seats">14</div>
        <div class="seats">15</div>
        <div class="seats">16</div>
        <div class="seats">17</div>
        <div class="seats">18</div>
        <div class="seats">19</div>
        <div class="seats">20</div>
        <div class="seats">21</div>
        <div class="seats">22</div>
        <div class="seats">23</div>
        <div class="seats">24</div>
        <div class="seats">25</div>
        <div class="seats">26</div>
        <div class="seats">27</div>
        <div class="seats">28</div>
        <div class="seats">29</div>
        <div class="seats">30</div>
        <div class="seats">31</div>
        <div class="seats">32</div>
        <div class="seats">33</div>
        <div class="seats">34</div>
        <div class="seats">35</div>
        <div class="seats">36</div>
        <div class="seats">37</div>
        <div class="seats">38</div>
        <div class="seats">39</div>
        <div class="seats">40</div>
        <div class="seats">41</div>
        <div class="seats">42</div>
        <div class="seats">43</div>
        <div class="seats">44</div>
        <div class="seats">45</div>
        <div class="seats">46</div>
    </section>
    </form>

    <div class="container">
        <div class="mx-auto text-center">
            <img src="../reservar/bus/bus-back-v.svg" alt="">
        </div>
    </div>

    <div class="container">
        <div class="mx-auto text-center confirmar">
            <button type="submit" id="confirmarAssento" class="btn btn-primary" disabled>Confirmar Assento</button>
        </div>
    </div>
    </div>

    </div>

    <script type="text/javascript">
	$("#form-busazul").submit(function () {

		event.preventDefault();
		var formData = new FormData(this);

		$.ajax({
			url: "busazul.php",
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


    <script>
         document.addEventListener('DOMContentLoaded', function () {
            var seats = document.querySelectorAll('.seats');
            var numeroAssentoSelecionado = document.getElementById('numeroAssentoSelecionado');
            var removerAssentoBtn = document.getElementById('removerAssento');

            seats.forEach(function(seat, index) {
                seat.addEventListener('click', function() {
                    // Remove a classe 'clicked' de todos os assentos
                    seats.forEach(function(s) {
                        s.classList.remove('clicked');
                    });

                    // Adiciona a classe 'clicked' apenas ao assento clicado
                    this.classList.add('clicked');

                    // Atualiza o número do assento selecionado
                    

                    // Exibe o botão de remover assento
                    removerAssentoBtn.style.display = 'inline';
                });
            });

        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var seats = document.querySelectorAll('.seats');
        var confirmarAssentoBtn = document.getElementById('confirmarAssento');

        seats.forEach(function(seat, index) {
            seat.addEventListener('click', function() {
                // Remove a classe 'confirmado' de todos os assentos
                seats.forEach(function(s) {
                    s.classList.remove('confirmado');
                });

                // Adiciona a classe 'confirmado' apenas ao assento clicado
                this.classList.add('confirmado');

                // Exibe o botão de confirmar assento
                confirmarAssentoBtn.removeAttribute('disabled');
            });
        });

        confirmarAssentoBtn.addEventListener('click', function() {
            // Muda a cor do assento para cinza apenas após clicar no botão de confirmar
            var assentoConfirmado = document.querySelector('.confirmado');
            if (assentoConfirmado) {
                assentoConfirmado.classList.add('confirmado-color');
            }
            
            // Oculta o botão de confirmar assento
            confirmarAssentoBtn.style.display = 'none';

            // Desabilita novamente o botão após a confirmação
            confirmarAssentoBtn.setAttribute('disabled', 'true');
        });
    });
</script>

</body>
</html>