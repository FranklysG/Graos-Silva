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
                                        <label>NOME </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>CPF</label>
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
                            <a class="btn btn-success btn-sm" href="#" value="NOVO" data-toggle="modal" data-target="#clienteModelForm">
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
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new Conn;

                                $sql = "select * from cliente";
                                $rows = $conn->sqlRows($sql);

                                foreach ($rows as $row) {
                                    ?>
                                    <tr>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-primary btn-sm text-white" href="" id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#clienteModelForm" data-id="<?php echo $row['id']; ?>" data-nome="<?php echo $row['nome']; ?>" data-cpf="<?php echo $row['cpf']; ?>" data-email="<?php echo $row['email']; ?>" data-telefone="<?php echo $row['telefone']; ?>" data-cep="<?php echo $row['cep']; ?>" data-logradouro="<?php echo $row['logradouro']; ?>" data-bairro="<?php echo $row['bairro']; ?>" data-cidade="<?php echo $row['cidade']; ?>" data-estado="<?php echo $row['estado']; ?>">
                                                <i class="fas fa-pencil-alt ">
                                                </i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm text-white" href="" id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#clienteModelDel" data-id="<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash fa-sm">
                                                </i>
                                                Delete
                                            </a>
                                        </td>
                                        <td><?php echo $row['nome']; ?></td>
                                        <td><?php echo $row['cpf']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['telefone']; ?></td>
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
        var email = button.data('email') // Extract info from data-* attributes
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