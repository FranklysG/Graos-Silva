<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nova Status de Serviço</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" role="form">
                            <div class="row">
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Status </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Descrição </label>
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
                            <a class="btn btn-success btn-sm" href="#" value="NOVO" data-toggle="modal" data-target="#motoristaModelForm">
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
                        <h3 class="card-title">Status Cadastrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th> </th>
                                    <th>Icone</th>
                                    <th>Status</th>
                                    <th>Descrição </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new Conn;

                                $sql = "select * from status";
                                $rows = $conn->sqlRows($sql);

                                foreach ($rows as $row) {
                                    $id = $row['id'];
                                    $status = $row['nome'];
                                    $desc = $row['descricao'];
                                    ?>
                                    <tr>
                                        <td class="project-actions text-left">

                                        </td>
                                        <td><?php
                                                echo $id; ?>
                                        </td>
                                        <td><?php

                                                switch ($id) {
                                                    case '1':
                                                        echo '<i class="bg-success fas fa-truck-loading p-2 rounded-circle" style="padding:10px";></i>';
                                                    break;
                                                    case '2':
                                                        echo '<i class="bg-warning fas fa-shipping-fast p-2 rounded-circle" style="padding:10px";></i>';
                                                        break;
                                                    case '3':
                                                        echo '<i class="bg-danger fas fa-truck p-2 rounded-circle" style="padding:10px";></i>';
                                                        break;
                                                } ?>
                                        </td>
                                        <td><?php
                                                echo $status; ?>
                                        </td>
                                        <td><?php
                                                echo $desc; ?>
                                        </td>
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

<div class="modal bd-example-modal-lg" id="motoristaModelForm" tabindex="-1" role="dialog" aria-labelledby="motoristaModelFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title motorista_title" id="motoristaModelFormLabel">NOVO MOTORISTA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include('CadastroMotoristaForm.php'); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal bd-example-modal-lg" id="motoristaModelDel" tabindex="-1" role="dialog" aria-labelledby="motoristaModelFormLabel" aria-hidden="true">
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
    $('#motoristaModelDel').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(recipient)
    })
    $('#motoristaModelForm').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('id') // Extract info from data-* attributes
        var nome = button.data('nome') // Extract info from data-* attributes
        var cpf = button.data('cpf') // Extract info from data-* attributes
        var rg = button.data('rg') // Extract info from data-* attributes
        var logradouro = button.data('logradouro') // Extract info from data-* attributes
        var bairro = button.data('bairro') // Extract info from data-* attributes
        var cidade = button.data('cidade') // Extract info from data-* attributes
        var cep = button.data('cep') // Extract info from data-* attributes
        var estado = button.data('estado') // Extract info from data-* attributes
        var veiculo_id = button.data('veiculo_id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(recipient)
        modal.find('#nome').val(nome)
        modal.find('#cpf').val(cpf)
        modal.find('#rg').val(rg)
        modal.find('#logradouro').val(logradouro)
        modal.find('#bairro').val(bairro)
        modal.find('#cidade').val(cidade)
        modal.find('#cep').val(cep)
        modal.find('#estado').val(estado)
        modal.find('#veiculo_id').val(veiculo_id)
    })
</script>