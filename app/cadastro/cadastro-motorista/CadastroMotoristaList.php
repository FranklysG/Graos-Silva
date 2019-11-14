<div class="container">

    <h4 class="motorista_title">CADASTRO DE MOTORISTA</h4>

    <div class="row">
        <div class="col col-md-2 col-sm-2 col-xs-2">
            <span><input type="text" class="form-control w-100" placeholder="NOME" required=""></span>
        </div>
        <div class="col col-md-2 col-sm-2 col-xs-2">
            <input type="text" class="form-control w-100" placeholder="CPF" required="">
        </div>
        <div class="col col-md-3 col-sm-3 col-xs-3">
            <span><input type="button" class="btn btn-primary mt-2" placeholder="" required="" value="BUSCAR"></span>
            <span><input type="button" class="btn btn-success mt-2" placeholder="" required="" value="NOVO" data-toggle="modal" data-target="#motoristaModelForm"></span>
        </div>

    </div>

    <br><br>

    <div class="container-fluid">
        <div class="row motorista_title_table bg-dark text-light mb-1">
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title"></div>
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title">NOME</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title">CPF</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title">CIDADE</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title">CEP</div>
            <div class="col col-md-2 col-sm-2 col-xs-2 motorista_title">DATA CADASTRO</div>
        </div>

        <?php
        $conn = new Conn;

        $sql = "select * from motorista";
        $rows = $conn->sqlRows($sql);

        foreach ($rows as $row) {
            ?>
            <div class="row">
                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1">
                    <i id="btnEdit" name="btnEdit" class="btn text-primary fa fa-edit" data-toggle="modal" data-target="#motoristaModelForm" 
                    data-id="<?php echo $row['id']; ?>" 
                    data-nome="<?php echo $row['nome']; ?>" 
                    data-cpf="<?php echo $row['cpf']; ?>" 
                    data-rg="<?php echo $row['rg']; ?>" 
                    data-logradouro="<?php echo $row['logradouro']; ?>" 
                    data-bairro="<?php echo $row['rg']; ?>" 
                    data-cidade="<?php echo $row['cidade']; ?>"
                    data-cep="<?php echo $row['cep']; ?>" 
                    data-estado="<?php echo $row['estado']; ?>" 
                    data-veiculo_id="<?php echo $row['veiculo_id']; ?>"></i>
                    <i id="btnDel" name="btnDel" class="btn text-danger fa fa-trash" data-toggle="modal" data-target="#motoristaModelDel" data-id="<?php echo $row['id']; ?>"></i>
                </div>

                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1"><?php echo $row['nome']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1"><?php echo $row['logradouro']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1"><?php echo $row['cidade']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1"><?php echo $row['cep']; ?></div>
                <div class="col col-md-2 col-sm-2 col-xs-2 motorista_table pl-3 pt-1"><?php echo $row['veiculo_id']; ?></div>
            </div>
        <?php } ?>
    </div>
</div>

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