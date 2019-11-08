<div class="container">

  <h4 class="veiculo_title">CADASTRO DE ARMAZEM</h4>

  <div class="row">
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <span><input type="text" class="form-control w-100" placeholder="Nome" required=""></span>
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Cidade" required="">
    </div>
    <div class="col col-md-2 col-sm-2 col-xs-2">
      <input type="text" class="form-control w-100" placeholder="Estado" required="">
    </div>
    <div class="col col-md-3 col-sm-3 col-xs-3">
      <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="buscar"></span>
      <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="novo"
          data-toggle="modal" data-target="#veiculoModelForm" data-whatever="@mdo"></span>
    </div>

  </div>

  <br><br>

  <div class="container-fluid">
    <div class="row armazem_title_table bg-dark text-light mb-1">
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title"></div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">ID</div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">NOME</div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">CNPJ</div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">RUA</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">BAIRRO</div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">CIDADE</div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">CEP</div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">ESTADO</div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_title">DATA CADASTRO</div> -->
    </div>

    <?php
    $conn = new Conn;

    $sql = "select * from armazen";
    $rows = $conn->sql($sql);

    foreach ($rows as $row) {
      ?>

    <div class="row">
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><i
          class="far fa-edit pr-1 btn text-primary"><?php ?></i><i class="fas fa-trash btn text-danger"></i></div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['id']; ?></div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['cnpj']; ?></div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['rua']; ?></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['bairro']; ?></div>
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['cidade']; ?></div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['cep']; ?></div> -->
      <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['estado']; ?></div>
      <!-- <div class="col col-md-2 col-sm-2 col-xs-2 veiculo_table pl-3 pt-1"><?php echo $row['dtcadastro']; ?></div> -->
    </div>

    <?php } ?>
  </div>
</div>

<div class="modal bd-example-modal-lg" id="veiculoModelForm" tabindex="-1" role="dialog"
  aria-labelledby="veiculoModelFormLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title veiculo_title" id="veiculoModelFormLabel">NOVO ARMAZEN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php include('CadastroVeiculoForm.php'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
<script>
  $('#veiculoModelForm').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Botão que acionou o modal
    var recipient = button.data('whatever') // Extrai informação dos atributos data-*
    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this)
    modal.find('.modal-title').text('NOVO VEICULO ')
    modal.find('.modal-body input').val(recipient)
  })
</script>