<?php
session_start();
include('app/model/Load.class.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/style-dashboard.css">
    <!-- <link rel="stylesheet" href="lib/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="lib/css/adminlte.min.css">
    <link rel="stylesheet" href="lib/font/css/all.css">
    <link rel="stylesheet" href="lib/css/css-cadastro-cliente/style-cadastro-cliente.css">
    <link rel="stylesheet" href="lib/css/css-cadastro-motorista/style-cadastro-motorista.css">
    <link rel="stylesheet" href="lib/css/style-cadastro-veiculo.css">
    <link rel="stylesheet" href="lib/css/style-cadastro-armazem.css">
    <link rel="stylesheet" href="lib/css/style-cadastro-produto.css">

    <script type="text/javascript" src="lib/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="lib/js/jquery.maskedinput.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Grãos Silva!</title>

</head>

<body class="hold-transition sidebar-mini">
    <div class=".content-wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
<<<<<<< HEAD
            </form>
=======
                <div class="col-12 d-inline-block mt-4 p-0">
                    <ul class="menu p-0">
                        <li class="pt-2"><a href="?pag=cadastro-cliente" class="font-weight-bold text-white ml-3"><i class="fa fa-user-tie"></i><label class="pl-2"> Cliente</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-produto" class="font-weight-bold text-white ml-3"><i class="fa fa-piggy-bank"></i><label class="pl-2"> Produto</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-motorista" class="font-weight-bold text-white ml-3"><i class="fa fa-user"></i><label class="pl-2"> Motorista</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-veiculo" class="font-weight-bold text-white ml-3"><i class="fa fa-truck-moving"></i><label class="pl-2"> Veiculo</label></a></li>
                        <li class="pt-2"><a href="?pag=cadastro-armazem" class="font-weight-bold text-white ml-3"><i class="fa fa-truck-loading"></i><label class="pl-2"> Armazem</label></a></li>
                    </ul>
                </div>
            </div>
>>>>>>> 558045a6b60d0fb9a45921a9c67e391ffdae26b1

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="lib/img/graosSilva-logo.png" alt="AdminLTE Logo" class="img-circle elevation-2" style="width: 56px;height: 45px !important;filter: invert(100%);margin: 5px;">
                <span class="brand-text font-weight-light">Grãos Silva</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="lib/img/avatars/logo.png" alt="AdminLTE Logo" class="img-circle elevation-2" style="width: 30px;height: 35px !important;margin: 5px;">
                    </div>
                    <div class="info" style="line-height: 2.4;">
                        <a href="#" class="d-block">Franklys Guimarães</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="?pag=cadastro-cliente" class="nav-link">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>
                                    Cliente
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pag=cadastro-produto" class="nav-link">
                                <i class="nav-icon fa fa-piggy-bank"></i>
                                <p>
                                    Produto
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pag=cadastro-motorista" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Motorista
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pag=cadastro-veiculo" class="nav-link">
                                <i class="nav-icon fa fa-truck-moving"></i>
                                <p>
                                    Veiculo
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?pag=cadastro-armazem" class="nav-link">
                                <i class="nav-icon fa fa-truck-loading"></i>
                                <p>
                                    Armazém
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /Main Sidebar Container -->

        <div class="content-wrapper" style="min-height: 520px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <?php
            $pag = filter_input(INPUT_GET, "pag");
            switch ($pag) {
                case 'cadastro-cliente':
                    include('app/cadastro/cadastro-cliente/CadastroClienteList.php');
                    break;
                case 'cadastro-produto':
                    include('app/cadastro/cadastro-produto/CadastroProdutoList.php');
                    break;
                case 'cadastro-motorista':
                    include('app/cadastro/cadastro-motorista/CadastroMotoristaList.php');
                    break;
                case 'cadastro-veiculo':
                    include('app/cadastro/cadastro-veiculo/CadastroVeiculoList.php');
                    break;
                case 'cadastro-armazem':
                    include('app/cadastro/cadastro-armazem/CadastroArmazemList.php');
                    break;
            }
            ?>
        </div>
    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>