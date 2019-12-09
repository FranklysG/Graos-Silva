<?php
session_start();
include('app/model/Load.class.php');
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['pass']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['pass']);
    header('Location: index.php?login=false');
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="lib/img/graosSilva-logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="lib/css/style-dashboard.css">
    <link rel="stylesheet" href="lib/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <script src="plugins/jquery/jquery.slim.min.js"></script>
    <script src="plugins/popper/umd/popper.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
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
                    <input class="form-control form-control-navbar" type="search" placeholder="Buscar " aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="lib/img/graosSilva-logo.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Porto Franco
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Carga Registrada ...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas atrás</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="lib/img/graosSilva-logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Açailandia
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Motorista na triagem</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas atrás</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="lib/img/graosSilva-logo.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Barcarena
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Motorista com atraso</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas atrás</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Veja todas as mensagens</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notificações</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 Novas Menssagens
                            <span class="float-right text-muted text-sm">3 min</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 Solicitações
                            <span class="float-right text-muted text-sm">12 horas</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 Novos suportes
                            <span class="float-right text-muted text-sm">2 dias</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Veja todas as notificações</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <!-- <img src="lib/img/graosSilva-logo.png" alt="AdminLTE Logo" class="img-circle" style="width: 45px;height: 40px !important;margin-left: 5px;"> -->
                <span class="brand-text font-weight-bold" style="line-height: 1em;font-size: 25px !important;margin-left: 20px;">GRÃOS SILVA</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="lib/img/graosSilva-logo.png" alt="AdminLTE Logo" class="img-circle elevation-1" style="width: 45px;height: 40px !important;margin-left: -10px;">
                    </div>
                    <div class="info" style="line-height: 2.6;">
                        <a href="#" class="d-block"><?php echo $_SESSION['apelido']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item header">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Painel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-cliente" class="nav-link">
                                        <i class="nav-icon fas fa-handshake"></i>
                                        <p>
                                            Cliente
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-produto" class="nav-link">
                                        <i class="nav-icon fa fa-piggy-bank"></i>
                                        <p>
                                            Produto
                                            <span class="right badge badge-danger badge-xs" style="font-size: 12px !important;">New</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-motorista" class="nav-link">
                                        <i class="nav-icon fa fa-user"></i>
                                        <p>
                                            Motorista
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-veiculo" class="nav-link">
                                        <i class="nav-icon fa fa-truck-moving"></i>
                                        <p>
                                            Veiculo
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-armazem" class="nav-link">
                                        <i class="nav-icon fa fa-truck-loading"></i>
                                        <p>
                                            Armazém
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=cadastro-status" class="nav-link">
                                        <i class="nav-icon fas fa-door-open"></i>
                                        <p>
                                            Status de Serviço
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=release-list" class="nav-link">
                                        <i class="nav-icon fas fa-file-pdf"></i>
                                        <p>
                                            Relatorios de serviço
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shipping-fast"></i>
                                <p>
                                    Ordens
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="?pag=ordem-entrada" class="nav-link">
                                        <i class="nav-icon fas fa-truck-moving"></i>
                                        <p>
                                            Entrada
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="?pag=ordem-saida" class="nav-link">
                                        <i class="nav-icon fas fa-truck-loading"></i>
                                        <p>
                                            Saida
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Sair
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="index.php" class="nav-link">
                                        <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p>
                                            Sair
                                        </p>
                                    </a>
                                </li>
                            </ul>
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
                case 'ordem-entrada':
                    include('app/ordem/ordem-entrada/OrdemEntradaList.php');
                    break;
                case 'ordem-saida':
                    include('app/ordem/ordem-saida/OrdemSaidaList.php');
                    break;
                case 'cadastro-status':
                    include('app/status/CadastroStatusList.class.php');
                    break;
                case 'release-list':
                    include('app/release/ReleaseList.php');
                    break;
            }
            ?>
        </div>

    </div>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>