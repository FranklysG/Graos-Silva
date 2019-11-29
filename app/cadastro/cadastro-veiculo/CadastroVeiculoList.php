<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cadastro Veiculos</h3>

            <div class="card-tools">

            </div>
          </div>
          <div class="card-body">
            <form action="" role="form">
              <div class="row">
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>PLACA </label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>MARCA</label>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>

              </div>
            </form>
          </div>
          <div class="card-footer">
            <div>
              <a class="btn btn-default btn-sm" href="#">
                <i class="fas fa-search">
                </i>
                Buscar
              </a>
              <a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#veiculoModelForm">
                <i class="fas fa-plus">
                </i>
                Novo
              </a>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Listagem de Veiculos</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> </th>
                  <th>#</th>
                  <th>Marca</th>
                  <th>Cor</th>
                  <th>Placa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conn = new Conn;

                $sql = "select * from veiculo";
                $rows = $conn->sqlRows($sql);

                foreach ($rows as $row) {
                  ?>
                  <tr>
                    <td class="project-actions text-left">
                      <a class="btn btn-primary btn-sm text-white" href="" id="btnEdit" name="btnEdit" data-toggle="modal" data-target="#veiculoModelForm" data-id="<?php echo $row['id']; ?>" data-marca="<?php echo $row['marca']; ?>" data-placa="<?php echo $row['placa']; ?>" data-cor="<?php echo $row['cor']; ?>">
                        <i class="fas fa-pencil-alt ">
                        </i>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm text-white" href="" id="btnDel" name="btnDel" data-toggle="modal" data-target="#veiculoModelDel" data-id="<?php echo $row['id']; ?>">
                        <i class="fas fa-trash fa-sm">
                        </i>
                        Delete
                      </a>
                    </td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['marca']; ?></td>
                    <td><?php echo $row['cor']; ?></td>
                    <td><?php echo $row['placa']; ?></td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>

  <div class="modal bd-example-modal-lg" id="veiculoModelForm" tabindex="-1" role="dialog" aria-labelledby="veiculoModelFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title veiculo_title" id="veiculoModelFormLabel">NOVO VEICULO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php include('CadastroVeiculoForm.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="modal bd-example-modal-md" id="veiculoModelDel" tabindex="-1" role="dialog" aria-labelledby="veiculoModelFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content bg-danger">
        <div class="modal-body">
          <form class="needs-validation" method="POST">
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
            <input type="hidden" class="form-control m-0" id="id" name="id">
            Tem certeza que deseja excluir o item ?
            <br><br>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="btnDel" value="btnDel">Ok</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  
  $('#veiculoModelDel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
  })
  $('#veiculoModelForm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    var recipient_marca = button.data('marca') // Extract info from data-* attributes
    var recipient_cor = button.data('cor') // Extract info from data-* attributes
    var recipient_placa = button.data('placa') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
    modal.find('#marca').val(recipient_marca)
    modal.find('#cor').val(recipient_cor)
    modal.find('#placa').val(recipient_placa)
  })
</script>