<div class="container">

  <h4 class="armazem_title">CADASTRO DE ARMAZEM</h4>

  <div class="row">
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <span><input type="text" class="form-control w-100" placeholder="Nome" required=""></span>
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Bairro" required="">
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Cidade" required="">
    </div>
    <div class="col col-md-3 col-sm-3 col-xs-3">
      <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="buscar"></span>
      <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="novo" data-toggle="modal" data-target="#armazemModelForm"></span>
    </div>

  </div>

  <br><br>

  <div class="container-fluid">
    <div class="row armazem_title_table bg-dark text-light mb-1">
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title"></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">NOME</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 armazem_title">RUA</div>
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
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1" data-toggle="modal" data-target="#armazemModelForm"><i class="far fa-edit pr-1 btn text-primary"><?php ?></i><i class="fas fa-trash btn text-danger"></i></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1"><?php echo $row['rua']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1"><?php echo $row['bairro']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1"><?php echo $row['cidade']; ?></div>
        <div class="col col-md-2 col-sm-2 col-xs-2 armazem_table pl-3 pt-1"><?php echo $row['estado']; ?></div>
      </div>

    <?php } ?>
  </div>
</div>

<div class="modal bd-example-modal-lg" id="armazemModelForm" tabindex="-1" role="dialog" aria-labelledby="armazemModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title armazem_title" id="armazemModelFormLabel">NOVO ARMAZEM</h5>
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

<script>
  $('#armazemModelForm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var recipient = button.data('whatever') // Extrai informação dos atributos data-*
    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('NOVO ARMAZEM ')
    modal.find('.modal-body input').val(recipient)
  })
</script>