<div class="container">

  <h4 class="veiculo_title">CADASTRO DE VEICULOS</h4>

  <div class="row">
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <span><input type="text" class="form-control w-100" placeholder="Modelo" required=""></span>
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Placa" required="">
    </div>
    <div class="col col-md-3 col-sm-3 col-xs-3">
      <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="buscar"></span>
      <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="novo"></span>
    </div>

  </div>

  <br><br>

  <div class="container-fluid">
    <div class="row veiculo_title_table bg-dark text-light mb-1">
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title"></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">ID</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">MODELO</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">COR</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">PLACA</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">DATA CADASTRO</div>
    </div>

    <?php
    $conn = new Conn;

    $sql = "select * from veiculo";
    $rows = $conn->sql($sql);

    foreach ($rows as $row) {
      ?>

      <div class="row">
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><i class="far fa-edit pr-1 btn text-primary"><?php ?></i><i class="fas fa-trash btn text-danger"></i></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><?php echo $row['id']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><?php echo $row['modelo']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><?php echo $row['cor']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><?php echo $row['placa']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table p-1"><?php echo $row['dtcadastro']; ?></div>
      </div>

    <?php } ?>
  </div>
</div>