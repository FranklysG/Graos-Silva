     <div class="container">

        <h4 class="veiculo_title">CLIENTES</h4>

        <div class="row">
            <div class="col col-md-2 col-sm-2 col-xs-2">
            <span><input type="text" class="form-control w-100" placeholder="NOME" required=""></span>
            </div>
            <div class="col col-md-2 col-sm-2 col-xs-2">
            <input type="text" class="form-control w-100" placeholder="CPF" required="">
            </div>
            <div class="col col-md-3 col-sm-3 col-xs-3">
            <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="BUSCAR"></span>
            <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="NOVO" data-toggle="modal" data-target="#veiculoModelForm"></span>
            </div>

        </div>

        <br><br>

        <div class="container-fluid">
            <div class="row veiculo_title_table bg-dark text-light mb-1">
            <div class="col col-md-2 col-sm-2 col-xs-2 cliente_title"></div>
            <div class="col col-md-3 col-sm-3 col-xs-3 cliente_title">NOME</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 cliente_title">CPF</div>
            <div class="col col-md-3 col-sm-3 col-xs-3 cliente_title">EMAIL</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 cliente_title">TELEFONE</div>
            </div>

            <?php
            $conn = new Conn;

            $sql = "select * from cliente";
            $rows = $conn->sqlRows($sql);

            foreach ($rows as $row) {
            ?>

            <div class="row">
                <div class="col col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1" data-toggle="modal" data-target="#veiculoModelForm"><i class="far fa-edit pr-1 btn text-primary"><?php ?></i><i class="fas fa-trash btn text-danger"></i></div>
                <div class="col col-md-3 col-sm-3 col-xs-3 cliente_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1"><?php echo $row['cpf']; ?></div>
                <div class="col col-md-3 col-sm-3 col-xs-3 cliente_table pl-3 pt-1"><?php echo $row['email']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1"><?php echo $row['telefone']; ?></div>
            </div>

            <?php } ?>
        </div>
        </div>

        <div class="modal bd-example-modal-lg" id="veiculoModelForm" tabindex="-1" role="dialog" aria-labelledby="veiculoModelFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <div class="modal-header pb-0 pt-0">
                <h5 class="modal-title cliente_title" id="clienteModelFormLabel">NOVO CLIENTE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include('CadastroClienteForm.php'); ?>
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
            modal.find('.modal-title').text('NOVO CLIENTE ')
            modal.find('.modal-body input').val(recipient)
        })
        </script>