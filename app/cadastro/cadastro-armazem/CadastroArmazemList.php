<!-- Main content -->
<section class="content">

<<<<<<< HEAD
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
                    <label>ARMAZÉM </label>
                    <input type="text" class="form-control" placeholder="Ex .. PHO - 4537">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>BAIRRO</label>
                    <input type="text" class="form-control" placeholder="Ex .. Scania">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>CIDADE</label>
                    <input type="text" class="form-control" placeholder="Ex .. Scania">
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
              <a class="btn btn-success btn-sm" href="#" data-toggle="modal" data-target="#armazemModelForm">
                <i class="fas fa-plus">
                </i>
                Novo
              </a>
            </div>
          </div>
        </div>
        <!-- /.card -->
      </div>
=======
  <h4 class="armazem_title">ARMAZEM</h4>

  <div class="row">
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <span><input type="text" class="form-control w-100" placeholder="Armazen" required=""></span>
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Bairro" required="">
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Cidade" required="">
    </div>
    <div class="col col-md-3 col-sm-3 col-xs-3">
      <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="BUSCAR"></span>
      <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="NOVO" data-toggle="modal" data-target="#armazemModelForm"></span>
>>>>>>> 558045a6b60d0fb9a45921a9c67e391ffdae26b1
    </div>
  </div>


  <div class="container-fluid">
<<<<<<< HEAD
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
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Bairro</th>
                  </th>
                  <th>Cidade</th>
                  <th>Estada</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $conn = new Conn;

                $sql = "select * from armazem";
                $rows = $conn->sqlRows($sql);

                foreach ($rows as $row) {
                  ?>
                  <tr>
                    <td class="project-actions text-left">
                      <a class="btn btn-primary btn-sm text-white" href="" id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#armazemModelForm" data-id="<?php echo $row['id']; ?>" data-nome="<?php echo $row['nome']; ?>" data-cnpj="<?php echo $row['cnpj']; ?>" data-logradouro="<?php echo $row['logradouro']; ?>" data-bairro="<?php echo $row['bairro']; ?>" data-cidade="<?php echo $row['cidade']; ?>" data-cep="<?php echo $row['cep']; ?>" data-estado="<?php echo $row['estado']; ?>">
                        <i class="fas fa-pencil-alt ">
                        </i>
                        Edit
                      </a>
                      <a class="btn btn-danger btn-sm text-white" href="" id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#armazemModelDel" data-id="<?php echo $row['id']; ?>">
                        <i class="fas fa-trash fa-sm">
                        </i>
                        Delete
                      </a>
                    </td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['logradouro']; ?></td>
                    <td><?php echo $row['bairro']; ?></td>
                    <td><?php echo $row['cidade']; ?></td>
                    <td><?php echo $row['estado']; ?></td>
                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
=======
    <div class="row armazem_title_table bg-dark text-light mb-1">
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title"></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">NOME</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">LOGRADOURO</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">BAIRRO</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">CIDADE</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">ESTADO</div>
    </div>

    <?php
    $conn = new Conn;

    $sql = "select * from armazem";
    $rows = $conn->sqlRows($sql);

    foreach ($rows as $row) {
      ?>

      <div class="row">
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1">

          <i id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#armazemModelForm" data-id="<?php echo $row['id']; ?>" data-nome="<?php echo $row['nome']; ?>" data-cnpj="<?php echo $row['cnpj']; ?>" data-logradouro="<?php echo $row['logradouro']; ?>" data-bairro="<?php echo $row['bairro']; ?>" data-cidade="<?php echo $row['cidade']; ?>" data-cep="<?php echo $row['cep']; ?>" data-estado="<?php echo $row['estado']; ?>">
          </i>
          <i id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#armazemModelDel" data-id="<?php echo $row['id']; ?>"></i>
>>>>>>> 558045a6b60d0fb9a45921a9c67e391ffdae26b1
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

<div class="modal bd-example-modal-lg" id="armazemModelForm" tabindex="-1" role="dialog" aria-labelledby="armazemModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title veiculo_title" id="armazemModelFormLabel">NOVO VEICULO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('CadastroArmazemForm.php'); ?>
      </div>
    </div>
  </div>
</div>

<div class="modal bd-example-modal-lg" id="armazemModelDel" tabindex="-1" role="dialog" aria-labelledby="armazemModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
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



<script>
  $('#armazemModelDel').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
  })

  $('#armazemModelForm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('id') // Extract info from data-* attributes
    var nome = button.data('nome') // Extract info from data-* attributes
    var cnpj = button.data('cnpj') // Extract info from data-* attributes
    var logradouro = button.data('logradouro') // Extract info from data-* attributes
    var bairro = button.data('bairro') // Extract info from data-* attributes
    var cidade = button.data('cidade') // Extract info from data-* attributes
    var cep = button.data('cep') // Extract info from data-* attributes
    var estado = button.data('estado') // Extract info from data-* attributes
    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('#id').val(recipient)
    modal.find('#nome').val(nome)
    modal.find('#cnpj').val(cnpj)
    modal.find('#logradouro').val(logradouro)
    modal.find('#bairro').val(bairro)
    modal.find('#cidade').val(cidade)
    modal.find('#cep').val(cep)
    modal.find('#estado').val(estado)


  })
</script>