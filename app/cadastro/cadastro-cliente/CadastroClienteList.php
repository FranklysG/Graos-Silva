     <div class="container">

        <h4 class="cliente_title">CLIENTES</h4>

        <div class="row">
            <div class="col col-md-3 col-sm-3 col-xs-3">
            <span><input type="text" class="form-control w-100 caixaAlta" placeholder="NOME" required=""></span>
            </div>
            <div class="col col-md-2 col-sm-2 col-xs-2">
            <input type="text" class="form-control w-100" placeholder="CPF" required="">
            </div>
            <div class="col col-md-3 col-sm-3 col-xs-3">
            <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="BUSCAR"></span>
            <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="NOVO" data-toggle="modal" data-target="#clienteModelForm"></span>
            </div>

        </div>

        <br><br>

        <div class="container-fluid">
            <div class="row cliente_title_table bg-dark text-light mb-1">
            <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_title"></div>
            <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3 cliente_title">NOME</div>
            <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_title">CPF</div>
            <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3 cliente_title">EMAIL</div>
            <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_title">TELEFONE</div>
            </div>

            <?php
            $conn = new Conn;

            $sql = "select * from cliente";
            $rows = $conn->sqlRows($sql);

            foreach ($rows as $row) {
            ?>

            <div class="row">
                <div class="col col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1">
                    <i id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#clienteModelForm" data-id="<?php echo $row['id']; ?>"
                    data-nome="<?php echo $row['nome']; ?>"
                    data-cpf="<?php echo $row['cpf']; ?>"
                    data-email="<?php echo $row['email']; ?>"
                    data-telefone="<?php echo $row['telefone']; ?>"
                    data-cep="<?php echo $row['cep']; ?>"
                    data-logradouro="<?php echo $row['logradouro']; ?>"
                    data-bairro="<?php echo $row['bairro']; ?>"
                    data-cidade="<?php echo $row['cidade']; ?>"
                    data-estado="<?php echo $row['estado']; ?>"></i>
                    <i id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#clienteModelDel" data-id="<?php echo $row['id']; ?>"></i>
                </div>
                <!--<div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1" data-toggle="modal" data-target="#clienteModelForm"><i class="far fa-edit pr-1 btn text-primary"></i><i class="fas fa-trash btn text-danger"></i></div>-->
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3 cliente_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1"><?php echo $row['cpf']; ?></div>
                <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3 cliente_table pl-3 pt-1"><?php echo $row['email']; ?></div>
                <div class="col col-lg-2 col-md-2 col-sm-2 col-xs-2 cliente_table pl-3 pt-1"><?php echo $row['telefone']; ?></div>
            </div>

            <?php } ?>
        </div>
        </div>

        <div class="modal bd-example-modal-lg" id="clienteModelForm" tabindex="-1" role="dialog" aria-labelledby="clienteModelFormLabel" aria-hidden="true">
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
        
        <div class="modal bd-example-modal-lg" id="clienteModelDel" tabindex="-1" role="dialog" aria-labelledby="clienteModelFormLabel" aria-hidden="true">
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
        $('#clienteModelDel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('id') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('#id').val(recipient)
        })
        $('#clienteModelForm').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Botão que acionou o modal
            var recipient = button.data('id') // Extrai informação dos atributos data-*
            var nome = button.data('nome') // Extract info from data-* attributes
            var cpf = button.data('cpf') // Extract info from data-* attributes
            var email= button.data('email') // Extract info from data-* attributes
            var telefone = button.data('telefone') // Extract info from data-* attributes
            var cep = button.data('cep') // Extract info from data-* attributes
            var bairro = button.data('bairro') // Extract info from data-* attributes
            var logradouro = button.data('logradouro') // Extract info from data-* attributes
            var numero = button.data('numero') // Extract info from data-* attributes
            var cidade = button.data('cidade') // Extract info from data-* attributes
            var estado = button.data('estado') // Extract info from data-* attributes
            // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
            // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
            var modal = $(this)
            modal.find('#id').val(recipient)
            modal.find('#nome').val(nome)
            modal.find('#cpf').val(cpf)
            modal.find('#email').val(email)
            modal.find('#telefone').val(telefone)
            modal.find('#cep').val(cep)
            modal.find('#bairro').val(bairro)
            modal.find('#logradouro').val(logradouro)
            modal.find('#numero').val(numero)
            modal.find('#cidade').val(cidade)
            modal.find('#estado').val(estado)

        })
        </script>
