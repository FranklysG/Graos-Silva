<?php
include('app/model/Load.class.php');

$user = new SystemUser;
$action = new ControlSystemUser;
$login = "";
$pass = "";
$apelido = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $user->setId(filter_input(INPUT_POST, "id"));
        $user->setLogin(filter_input(INPUT_POST, "login"));
        $user->setPass(filter_input(INPUT_POST, "pass"));
        $user->setApelido(filter_input(INPUT_POST, "apelido"));

        $action->edit($user);
    } else {
        $user->setLogin(filter_input(INPUT_POST, "login"));
        $user->setPass(filter_input(INPUT_POST, "pass"));
        $user->setApelido(filter_input(INPUT_POST, "apelido"));

        $action->add($user);
        header('Location:index.php');
    }
}

?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grãos Silva</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" href="lib/img/graosSilva-logo.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="register-page" style="min-height: 586.391px;">
    <div class="register-box">
        <div class="card">
            <div class="card-body register-card-body">
                <div class="register-logo">
                    <a href="#">
                        <img src="lib/img/graosSilva-logo.png" alt="graos silva Logo" style="width: 80px;height: 75px !important;">
                    </a>
                </div>

                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="usuario" name="login">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="apelido" name="apelido">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="senha" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-success">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    Li e conpassdo com os <a href="#">Termos</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block" name="btnSalvar" value="btnSalvar">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <p>- OU -</p>
                    <a href="#" class="btn btn-block btn-success">
                        <i class="fab fa-facebook mr-2"></i> Registrar usando Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Registrar usando Google
                    </a>
                </div>

                <a href="index.php" class="text-center">voltar para login</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>


</body>

</html>