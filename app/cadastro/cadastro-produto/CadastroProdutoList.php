<div class="container">

  <h4 class="produto_title">VENDAS DE PRODUTOS</h4>

  <div class="row">
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100 bt" placeholder="Nota Fiscal" required="">
    </div>
    <div class="col col-md-3 col-sm-3 col-xs-3">
      <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="BUSCAR"></span>
      <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="NOVO" data-toggle="modal" data-target="#produtoModelForm"></span>
    </div>

  </div>

  <br><br>

  <div class="container-fluid">
    <div class="row produto_title_table bg-dark text-light mb-1">
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title"></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title">NOTA FISCAL</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title">NOME</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title">TIPO</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title">QUANTIDADE</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 produto_title">DATA CADASTRO</div>
    </div>

    <?php
    $conn = new Conn;

    $sql = "select * from produto";
    $rows = $conn->sqlRows($sql);

    foreach ($rows as $row) {
      ?>
      <div class="row">
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1">
          <i id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#produtoModelForm" data-id="<?php echo $row['id']; ?>"
          data-produto="<?php echo $row['nome']; ?>"
          data-tipo="<?php echo $row['tipo']; ?>"
          data-quantidade="<?php echo $row['qtde']; ?>"></i>
          <i id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#produtoModelDel" data-id="<?php echo $row['id']; ?>"></i>
        </div>
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1"><?php echo $row['id']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1"><?php echo $row['tipo']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1"><?php echo $row['qtde']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 produto_table pl-3 pt-1"><?php echo $row['dtcadastro']; ?></div>
      </div>
    <?php } ?>
  </div>
</div>

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
        <?php include('CadastroProdutoForm.php');?>
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