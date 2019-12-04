
<?php
  session_start();
  include('app/model/Conn.class.php');

  $login = $_POST['login'];
  $pass = $_POST['pass'];
  
  $conn = new Conn;
  $sql = "select * from system_user where login = '{$login}' and pass = '{$pass}'";

  $rows = $conn->sqlRows($sql);

  if (!empty($rows)) {
    foreach ($rows as $row) {
      $_SESSION['login'] = $row['login'];
      $_SESSION['pass'] = $row['pass'];
      $_SESSION['apelido'] = $row['apelido'];
      header('Location: dashboard.php?pag=cadastro-cliente');
    }
  } else {
    unset($_SESSION['login']);
    unset($_SESSION['pass']);
    header('Location: index.php?login=false');
  }
?>