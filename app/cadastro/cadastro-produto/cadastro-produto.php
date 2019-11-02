<?php 

$conn = new Conn();

$sql = 'select * from veiculo';
$conn->sql($sql);

var_dump($conn->sql($sql));


?>