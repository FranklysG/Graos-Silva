<h2 id="h3_h">Cadastro Veiculos</h2>

<div class="row">
  <div class="col-sm-2">EDIT</div>
  <div class="col-sm-2">ID</div>
  <div class="col-sm-2">MODELO</div>
  <div class="col-sm-2">COR</div>
  <div class="col-sm-2">PLACA</div>
</div>

<?php 
  $conn = new Conn;

  $sql = "select * from veiculo";
  $rows = $conn->sql($sql);
 
  foreach($rows as $row){
?>

<div class="row">
  <div class="col-sm-2"><i class="far fa-edit"><?php ?></i></div>
  <div class="col-sm-2"><?php echo $row['id'];?></div>
  <div class="col-sm-2"><?php echo $row['modelo'];?></div>
  <div class="col-sm-2"><?php echo $row['cor'];?></div>
  <div class="col-sm-2"><?php echo $row['placa'];?></div>
</div>


<?php }?>
