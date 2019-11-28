<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Cadastro Produtos</h3>

            <div class="card-tools">

            </div>
          </div>
          <div class="card-body">
            <form action="" role="form">
              <div class="row">
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>PRODUTO </label>
                    <input type="text" class="form-control">
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
              <a class="btn btn-success btn-sm" href="#" value="novo" data-toggle="modal" data-target="#produtoModelForm">
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
            <h3 class="card-title">Listagem de Produtos</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> </th>
                  <th>Nome</th>
                  <th>Tipo</th>
                  <th>Quantidade</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conn = new Conn;

                $sql = "select * from produto";
                $rows = $conn->sqlRows($sql);

                foreach ($rows as $row) {
                  ?>
                  <tr>
                    <td class="project-actions text-left">
                      <a class="btn btn-primary btn-sm text-white" href="" id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#produtoModelForm" data-id="<?php echo $row['id']; ?>" data-produto="<?php echo $row['nome']; ?>" data-tipo="<?php echo $row['tipo']; ?>" data-quantidade="<?php echo $row['qtde']; ?>">
                        <i class="fas fa-pencil-alt ">
                        </i>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm text-white" href="" id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#produtoModelDel" data-id="<?php echo $row['id']; ?>">
                        <i class="fas fa-trash fa-sm">
                        </i>
                        Delete
                      </a>
                    </td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['tipo']; ?></td>
                    <td><?php echo $row['qtde']; ?></td>
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
</section>

<div class="modal bd-example-modal-lg" id="produtoModelForm" tabindex="-1" role="dialog" aria-labelledby="produtoModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title produto_title" id="produtoModelFormLabel">VENDAS DE PRODUTOS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('CadastroProdutoForm.php'); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal bd-example-modal-lg" id="produtoModelDel" tabindex="-1" role="dialog" aria-labelledby="veiculoModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background:none;border:none;">
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
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
</div>

<script>
  $('#produtoModelDel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
  })
  $('#produtoModelForm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    var produto = button.data('produto') // Extract info from data-* attributes
    var tipo = button.data('tipo') // Extract info from data-* attributes
    var quantidade = button.data('quantidade') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
    modal.find('#produto').val(produto)
    modal.find('#tipo').val(tipo)
    modal.find('#quantidade').val(quantidade)
  })
</script>