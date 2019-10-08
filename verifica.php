
<?php

  $login = $_POST['login'];
  $_SESSION['login'] = $login;
  $pass = $_POST['pass'];


  if (($login == "admin") and ($pass == "admin")) {
    header('Location: dashboard.php?pag=cadastro-cliente');
  } else {
    header('Location: index.php?login=false');
  }
?>