<!-- Main content -->
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Nova Ordem de Entrada</h3>

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
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>ARMAZÉM</label>
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
                            <!-- <a class="btn btn-success btn-sm" href="#" value="NOVO" data-toggle="modal" data-target="#ordemModelForm">
                                <i class="fas fa-plus">
                                </i>
                                Novo
                            </a> -->
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
                        <h3 class="card-title">Ordens do Dia</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> </th>
                                    <th>Status</th>
                                    <th>Produto</th>
                                    <th>fornecedor</th>
                                    <th>Armazém</th>
                                    <th>Motorista</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $conn = new Conn;

                                $sql = "select * from entrada order by id desc";
                                $rows = $conn->sqlRows($sql);

                                foreach ($rows as $row) {
                                    $status = $row['status_id'];
                                    $produto = $row['produto_id'];
                                    $fornecedor = $row['fornecedor_id'];
                                    $armazem = $row['armazem_id'];
                                    $motorista = $row['motorista_id'];
                                    $chave = $row['chave'];
                                    ?>
                                    <tr>
                                        <td class="project-actions text-left">
                                            <a class="btn btn-success btn-sm text-white" href="" id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#ordemModelForm" data-id="<?php echo $row['id']; ?>" data-produto="<?php echo $produto; ?>" data-fornecedor="<?php echo $fornecedor; ?>" data-armazem="<?php echo $armazem; ?>" data-motorista="<?php echo $motorista; ?>" data-chave_id="<?php echo $row['chave']; ?>">
                                                <i class="fas fa-check ">
                                                </i>
                                                Check
                                            </a>
                                            <!-- <a class="btn btn-danger btn-sm text-white" href="" id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#ordemModelDel" data-id="<?php echo $row['id']; ?>">
                                                <i class="fas fa-trash fa-sm">
                                                </i>
                                                Delete
                                            </a> -->
                                        </td>
                                        <td><?php
                                                $sql = "select * from status where id={$status}";
                                                $row = $conn->sqlRows($sql);
                                                $row = array_shift($row);
                                                switch ($status) {
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
                                                $sql = "select * from produto where id={$produto}";
                                                $row = $conn->sqlRows($sql);
                                                $row = array_shift($row);
                                                echo $row['nome']; ?>
                                        </td>
                                        <td><?php
                                                $sql = "select * from fornecedor where id={$fornecedor}";
                                                $row = $conn->sqlRows($sql);
                                                $row = array_shift($row);
                                                echo $row['nome']; ?>
                                        </td>
                                        <td><?php
                                                $sql = "select * from armazem where id={$armazem}";
                                                $row = $conn->sqlRows($sql);
                                                $row = array_shift($row);
                                                echo $row['nome']; ?>
                                        </td>
                                        <td><?php
                                                $sql = "select * from motorista where id={$motorista}";
                                                $row = $conn->sqlRows($sql);
                                                $row = array_shift($row);
                                                echo $row['nome']; ?>
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

<div class="modal bd-example-modal-sm" id="ordemModelForm" tabindex="-1" role="dialog" aria-labelledby="ordemModelFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title motorista_title" id="ordemModelFormLabel">CHAVE DA CARGA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php include('OrdemEntradaForm.php'); ?>
            </div>
        </div>
    </div>
</div>

<div class="modal bd-example-modal-lg" id="ordemModelDel" tabindex="-1" role="dialog" aria-labelledby="ordemModelFormLabel" aria-hidden="true">
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
    $('#ordemModelDel').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('id') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(recipient)
    })
    $('#ordemModelForm').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('id') // Extract info from data-* attributes
        var produto = button.data('produto') // Extract info from data-* attributes
        var fornecedor = button.data('fornecedor') // Extract info from data-* attributes
        var armazem = button.data('armazem') // Extract info from data-* attributes
        var motorista = button.data('motorista') // Extract info from data-* attributes
        var chave_id = button.data('chave_id') // Extract info from data-* attributes

        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#id').val(recipient)
        modal.find('#produto').val(produto)
        modal.find('#fornecedor').val(fornecedor)
        modal.find('#armazem').val(armazem)
        modal.find('#motorista').val(motorista)
        modal.find('#chave_id').val(chave_id)
    })
        
</script>