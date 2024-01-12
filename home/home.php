<?php
require_once('../home/verificar.php');
    @$_SESSION['id'];
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
    <title>Aemarbus - Checkin</title>

    <link rel="icon" href="assets/img/comum/favicon.png" type="image/x-icon" />
    <link href="../assets/css/icons.css" rel="stylesheet">
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/login_painel/custom.css" rel="stylesheet">
    <link href="../assets/css/login_painel/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://kit.fontawesome.com/6320f7a20c.js" crossorigin="anonymous"></script>
</head>

<body class="ltr error-page1 bg-primary">

<nav class="navbar navbar-expand">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
    <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" id="profileDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle profile-icon"></i>
    </a>
        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <?php
            // Verificar o nível do usuário e exibir o botão correspondente
            if ($_SESSION['nivel'] == 'Administrador' || $_SESSION['nivel'] == 'Diretoria') {
            echo '<a class="dropdown-item" href="../painel/index.php">';
            echo '<i class="fas fa-cogs"></i> Painel Administrativo';
            }
            ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../login/logout.php">
                <i class="fas fa-sign-out-alt"></i> Sair
            </a>
        </div>
    </li>
</ul>

            </div>
        </div>
</nav>



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
                                        <a href="../home/home.php">
                                            <img src="../assets/img/comum/aemar.png" class="sign-favicon" alt="logo">
                                        </a>
                                    </div>
                                    <div class="">
                                        <div class="main-signup-header">
                                            <div class="panel panel-primary">
                                                <div class="panel-body tabs-menu-body border-0 p-3">
                                                    

                                                <form method="post" action="reservar.php">
    <div class="form-group">
        <label for="busSelect" class="form-label">Selecione o ônibus</label>
        <select class="form-select" id="busSelect" name="onibusazul" required>
            <option value="" disabled selected>Selecione o ônibus</option>
            <option value="1">Ônibus Azul</option>
            <option value="2">Ônibus Verde</option>
        </select>
    </div>

    <div class="form-group">
        <label for="faculdadeSelect" class="form-label">Selecione a faculdade</label>
        <select class="form-select" id="faculdadeSelect" name="faculdade" required>
            <option value="" disabled selected>Selecione a faculdade</option>
            <option value="faculdade1">Faculdade 1</option>
            <option value="faculdade2">Faculdade 2</option>
        </select>
    </div>

    <div class="form-group">
    <label for="assentoSelect" class="form-label">Selecione o assento</label>
    <select class="form-select" id="assentoSelect" name="numeroassento" required>
        <option value="" disabled selected>Selecione o assento</option>
        <option value="assento01">01</option>
        <option value="assento02">02</option>
        <option value="assento03">03</option>
        <option value="assento04">04</option>
        <option value="assento05">05</option>
        <option value="assento06">06</option>
        <option value="assento07">07</option>
        <option value="assento08">08</option>
        <option value="assento09">09</option>
        <option value="assento10">10</option>
        <option value="assento11">11</option>
        <option value="assento12">12</option>
        <option value="assento13">13</option>
        <option value="assento14">14</option>
        <option value="assento15">15</option>
        <option value="assento16">16</option>
        <option value="assento17">17</option>
        <option value="assento18">18</option>
        <option value="assento19">19</option>
        <option value="assento20">20</option>
        <option value="assento21">21</option>
        <option value="assento22">22</option>
        <option value="assento23">23</option>
        <option value="assento24">24</option>
        <option value="assento25">25</option>
        <option value="assento26">26</option>
        <option value="assento27">27</option>
        <option value="assento28">28</option>
        <option value="assento29">29</option>
        <option value="assento30">30</option>
        <option value="assento31">31</option>
        <option value="assento32">32</option>
        <option value="assento33">33</option>
        <option value="assento34">34</option>
        <option value="assento35">35</option>
        <option value="assento36">36</option>
        <option value="assento37">37</option>
        <option value="assento38">38</option>
        <option value="assento39">39</option>
        <option value="assento40">40</option>
        <option value="assento41">41</option>
        <option value="assento42">42</option>
        <option value="assento43">43</option>
        <option value="assento44">44</option>
        <option value="assento45">45</option>
        <option value="assento46">46</option>
    </select>
</div>


    <button type="submit" class="btn btn-primary btn-block">Confirmar Assento</button>
</form>




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
    </div>




    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/moment/moment.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>