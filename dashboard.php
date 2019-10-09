<!doctype html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/css/style-dashboard.css">
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font/css/all.css">
    <title>Grãos Silva!</title>

</head>


<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div id="menu" class="col-3 d-inline-block p-0 m-0">
                <div class="col-12 d-inline-block">
                    <h4 class="text-lowercase font-weight-bold p-3 text-white">Grãos Silva</h4>
                </div>
                <div class="col-12 bg-warning d-inline-block mt-4">
                    <ul class="menu p-0">
                        <li class="pt-2"><a href="?pag=cadastro-cliente" class="font-weight-bold text-white"><i class="fa fa-user-tie"><label class="pl-2"> Cliente</label></i></i></a></li>
                        <li class="pt-2"><a href="?pag=" class="font-weight-bold text-white"><i class="fa fa-piggy-bank"><label class="pl-2"> Produto</label></i></i></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-veiculo" class="font-weight-bold text-white"><i class="fa fa-truck-moving"><label class="pl-2"> Veiculo</label></i></i></a></li>
                        <li class="pt-2"><a href="?pag=" class="font-weight-bold text-white"><i class="fa fa-truck-loading"><label class="pl-2"> Armazen</label></i></i></a></li>
                    </ul>
                </div>
            </div>

            <div id="main" class="col-9 d-inline-block p-0 m-0">
                <div class="col-9 d-inline-block" style="position:relative;top:-10px;">
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="col-2 d-inline-block" style="position:relative;top:10px;">
                    <img src="lib/img/avatars/avatar.jpg" class="float-right d-inline-block rounded-circle w-50" alt="">
                </div>
                <div class="col-12 bg-primary d-inline-block">
                    <?php 
                        $pag = filter_input(INPUT_GET, "pag");
                        switch($pag){
                            case 'cadastro-cliente' :
                                include('app/cadastro/cadastro-cliente.php');
                                break;
                            case 'cadastro-veiculo' :
                                include('app/cadastro/cadastro-veiculo.php');
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