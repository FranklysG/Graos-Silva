<?php include('lib/class_php/con.php'); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/style-dashboard.css">
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font/css/all.css">
    <link rel="stylesheet" href="lib/css/css-cadastro-cliente/style-cadastro-cliente.css">
    <link rel="stylesheet" href="lib/css/css-cadastro-cliente/style-registro-cliente.css">
    <link rel="stylesheet" href="lib/css/css-cadastro-motorista/style-cadastro-motorista-veiculo.css">
    <link rel="stylesheet" href="lib/css/style-cadastro-armazem.css">

    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="jquery.maskedinput.js"></script>
    <title>Grãos Silva!</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="menu" class="col-2 d-inline-block bg-dark p-0 m-0" style="height:auto;">
                <div class="col-12 d-inline-block pl-0">
                    <div class="text-uppercase font-weight-bold ml-2 text-white"><img src="lib/img/graosSilva-logo.png" class="m-2" style="width: 50px;filter:invert(100%);padding-top: 20px;"><p class="d-inline-flex ml-2 text-left"> GRÃOS<br>SILVA</p></div>
                </div>
                <div class="col-12 d-inline-block mt-4 p-0">
                    <ul class="menu p-0">
                        <li class="pt-2"><a href="?pag=cadastro-cliente" class="font-weight-bold text-white ml-3"><i class="fa fa-user-tie"></i><label class="pl-2"> Cliente</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-produto" class="font-weight-bold text-white ml-3"><i class="fa fa-piggy-bank"></i><label class="pl-2"> Produto</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-motorista" class="font-weight-bold text-white ml-3"><i class="fa fa-user"></i><label class="pl-2"> Motorista</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-veiculo" class="font-weight-bold text-white ml-3"><i class="fa fa-truck-moving"></i><label class="pl-2"> Veiculo</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-armazem" class="font-weight-bold text-white ml-3"><i class="fa fa-truck-loading"></i><label class="pl-2"> Armazen</label></a></li>
                    </ul>
                </div>
            </div>

            <div id="main" class="col-10 d-inline-block p-0 m-0">
                <div class="row bg-dark mr-0" style="height:80px;">
                    <div class="col-9 d-inline-block" style="position:relative;top:20px;">
                        <input type="text" name="" id="" class="form-control">
                    </div>
                    <div class="col-2 d-inline-block">
                        <img src="lib/img/avatars/logo.png" class="float-right d-inline-block rounded-circle mt-3" style="width:49px;height: 50px;">
                    </div>
                </div>
                <div class="col-12 d-inline-block p-0">
                    <?php
                        $pag = filter_input(INPUT_GET, "pag");
                        switch ($pag) {
                            case 'cadastro-cliente':
                                include('app/cadastro/cadastro-cliente/cadastro-cliente.php');
                                break;
                            case 'cadastro-produto':
                                include('app/cadastro/cadastro-produto.php');
                                break;
                            case 'cadastro-motorista':
                                include('app/cadastro/cadastro-motorista/cadastro-motorista.php');
                                break;
                            case 'cadastro-veiculo':
                                include('app/cadastro/cadastro-motorista/cadastro-veiculo.php');
                                break;
                            case 'cadastro-armazem':
                            include('app/cadastro/cadastro-armazem.php');
                            break;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>