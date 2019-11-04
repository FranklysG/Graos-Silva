<?php

include('../lib/class_php/con.class.php');

$veiculo = new Conn();

$sql = "SELECT * FROM veiculo";
$rows = $veiculo->sql($sql);

?>
<link rel="stylesheet" href="../lib/css/bootstrap.min.css">
<link rel="stylesheet" href="../lib/font/css/all.css">
<link rel="stylesheet" href="../lib/css/style-pag-teste.css">
<table>
    <tr>
        <th><b></b></th>
        <th><b>ID</b></th>
        <th><b>MODELO</b></th>
        <th><b>COR</b></th>
        <th><b>PLACA</b></th>
    </tr>
    <?php
    foreach ($rows as $row) {
        ?>
        <tr>
            <td><button class="btn btn-outline-primary"><i class="far fa-edit"></i> Editar </button></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['cor']; ?></td>
            <td><?php echo $row['placa']; ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td><button class="btn btn-outline-primary"><i class="fas fa-plus"></i> Add </button></td>
        <td><input type="text" name=""></td>
        <td><input type="text" name="modelo"></td>
        <td><input type="text" name="cor"></td>
        <td><input type="text" name="placa"></td>
    </tr>
</table>
<?php

$veiculo->close();

?>