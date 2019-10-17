<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Login</title>
  <!-- Principal CSS do Bootstrap -->
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <!-- Estilos customizados para esse template -->
  <link href="lib/css/style-index.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="verifica.php" method="POST">
    <h2 style="font-weight: 700;color: #199c37;text-shadow: 3px 3px 2px #c2c2c2;"><img src="lib/img/graosSilva-logo.png"
        style="width: 120px;"></h2><br>
    <label for="inputEmail" class="sr-only">Endereço de email</label>
    <input type="text" name="login" class="form-control" placeholder="Seu email" required autofocus><br>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="pass" class="form-control" placeholder="Senha" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar de mim
      </label>
    </div>
    <button class="btn btn-lg btn-block" type="submit"
      style="background-color: #199c37;color: #fff;border-color: #199c37;">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
    <?php if($_GET['login']){?>
      <div class="btn btn-danger" disabled="disabled">
        Verifique seus dados e tente novamente!
      </div>
    <?php }?>
  </form>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>